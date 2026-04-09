<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Allergy;
use App\Models\Ingredient;
use App\Models\AllergyRecipe;
use App\Models\AllergyUser;
use App\Models\IngredientRecipe;
use App\Models\Step;
use App\Models\Like;
use App\Models\User;

class RecipeController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->get('tab', 'recommend');
        $keyword = $request->get('keyword');
        $excludeAllergies = $request->input('allergy_recipe', []);
        $selectedAllergies = [];

        if($keyword) {
            $keywords = preg_split('/\s+/', $keyword);
            $message = implode(' ', $keywords) . ' のレシピ一覧';
        } else {
            $message = "レシピ一覧";
        }

        if (!empty($excludeAllergies)) {
            $selectedAllergies = Allergy::whereIn('id', $excludeAllergies)
            ->pluck('name')
            ->toArray();
        }

        if ($tab === 'recommend') {
            $recipes = Recipe::query()
            ->orderBy('created_at', 'desc')
            ->keywordSearch($keyword)
            ->excludeAllergies($excludeAllergies)
            ->paginate(10);

        } elseif ($tab === 'mylist') {
            if (! auth()->check()) {
                $recipes = collect();
            } else {
                /** @var \App\Models\User $user */$user = auth()->user();
                $recipes = $user->likedRecipes()
                ->orderBy('likes.created_at', 'desc')
                ->keywordSearch($keyword)
                ->excludeAllergies($excludeAllergies)
                ->paginate(10);
            }
        }

        return view('index', compact('recipes', 'tab', 'keyword', 'message', 'selectedAllergies'));
    }

    public function postIndex()
    {
        if (! auth()->check()) {
            return redirect('/login');
        }

        $allergies = Allergy::all();

        return view('post', compact('allergies'));
    }

    public function postSore(Request $request)
    {
        $path = $request->file('recipe_image') ? $request->file('recipe_image')->store('images', 'public') : null;

        $recipe = Recipe::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'image' => $path,
            'description' => $request->description,
            'servings' => $request->servings,
            'tips' => $request->tips,
        ]);

        $recipe->allergies()->sync($request->allergy_recipe);

        if ($request->has('ingredients')) {
            foreach ($request->ingredients as $key => $ing_name) {
                if (empty($ing_name)) continue;

                $ingredient = Ingredient::firstOrCreate(['name' => $ing_name]);

                $recipe->ingredients()->attach($ingredient->id, [
                    'quantity' => $request->quantities[$key] ?? ''
                ]);
            }
        }

        if ($request->has('step')) {
            foreach ($request->steps as $index => $content) {
                if (empty($content)) continue;
                $recipe->steps()->create([
                    'step_number' => $index + 1,
                    'content' => $content
                ]);
            }
        }

        return redirect('/mypage');
    }
}
