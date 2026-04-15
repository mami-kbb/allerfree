<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\PostRequest;
use App\Models\Recipe;
use App\Models\Allergy;
use App\Models\Ingredient;


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
                $recipes = new LengthAwarePaginator([], 0, 10);
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

    public function show($recipe_id)
    {
        $recipe = Recipe::with([
            'user.profile',
            'allergies',
            'ingredients',
            'steps',
        ])->withCount('likes')->findOrFail($recipe_id);

        $likesCount = $recipe->likes_count;

        $isLiked = false;
        if (auth()->check()) {
            $isLiked = auth()->user()->likes()->where('recipe_id', $recipe_id)->exists();
        }

        return view('show', compact('recipe', 'likesCount', 'isLiked'));
    }

    public function toggle($id)
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        $like = $user->likes()->where('recipe_id', $id)->first();

        if ($like) {
            $like->delete();
        } else {
            $user->likes()->create(['recipe_id' => $id]);
        }

        return back();
    }

    public function postIndex()
    {
        if (! auth()->check()) {
            return redirect('/login');
        }

        $allergies = Allergy::all();

        return view('post', compact('allergies'));
    }

    public function postStore(PostRequest $request)
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

        if ($request->has('steps')) {
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
