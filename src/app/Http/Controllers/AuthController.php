<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use App\Models\Allergy;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        if (! auth()->check()) {
            return redirect('/login
            ');
        }

        $user = Auth::user();
        $profile = $user->profile;

        $query = Recipe::query()->orderBy('created_at', 'desc');

        if (auth()->check()) {
            $query->where('user_id', auth()->id());
        }

        $recipes = $query->get();

        return view('auth.profile', compact('user', 'profile', 'recipes'));
    }

    public function edit()
    {
        $user = Auth::user();

        $profile = $user->profile;

        $allergies = Allergy::selectable()->get();

        return view('auth.profile_edit', compact('user', 'profile', 'allergies'));
    }

    public function update(Request $request)
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

        if ($isFirstTime) {
            return redirect('/');
        }

        return redirect('/mypage');
    }
}
