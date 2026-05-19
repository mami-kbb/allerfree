<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use App\Models\Allergy;

class AuthController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $profile = $user->profile;

        $recipes = Recipe::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();

        return view('auth.profile', compact('user', 'profile', 'recipes'));
    }

    public function edit()
    {
        $user = Auth::user();
        $profile = $user->profile;
        $allergies = Allergy::selectable()->get();

        return view('auth.profile_edit', compact('user', 'profile', 'allergies'));
    }

    public function update(ProfileRequest $request)
    {
        $user = Auth::user();

        /** @var \App\Models\User $user */
        $isFirstTime = !$user->profile()->exists();

        $profile = $user->profile()->firstOrNew([]);

        if ($request->hasFile('profile_image')) {
                $path = $request->file('profile_image')->store('profiles', 'public');
                $profile->profile_image = $path;
        }

        $user->name = $request->name;
        $user->save();

        $profile->comment = $request->comment;
        $profile->save();

        $allergyIds = $request->input('allergy_recipe', []);
        $user->allergies()->sync($allergyIds);

        if ($isFirstTime) {
            return redirect('/');
        }

        return redirect('/mypage');
    }
}
