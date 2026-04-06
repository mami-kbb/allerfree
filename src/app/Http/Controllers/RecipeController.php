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

        if ($tab === 'recommend') {
            $query = Recipe::query()->orderBy('created_at', 'desc');

            if (!empty($keyword)) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            }

            $recipes = $query->get();
        } elseif ($tab === 'mylist') {
            if (! auth()->check()) {
                $recipes = collect();
            } else {
                /** @var \App\Models\User $user */$user = auth()->user();
                $query = $user->likedRecipes()
                ->orderBy('likes.created_at', 'desc');

                if (!empty($keyword)) {
                    $query->where('recipes.name', 'LIKE', '%' . $keyword . '%');
                }

                $recipes = $query->get();
            }
        }

        return view('index', compact('recipes', 'tab', 'keyword'));
    }
}
