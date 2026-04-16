@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('nav')
@include('layouts.header_nav')
@endsection

@section('content')
<div class="profile-content">
    <div class="profile">
        <div class="user-info">
            @if ($profile && $profile->profile_image)
            <img src="{{ asset('storage/'.$profile->profile_image) }}" alt="プロフィール画像" class="user-img">
            @else
            <img src="{{ asset('/images/icon.png') }}" alt="icon" class="user-img">
            @endif
            <p class="user-name">{{ $user->name }}</p>
        </div>
        <a href="/mypage/profile" class="profile-edit">プロフィールを編集</a>

    </div>
    </div>
    <div class="content-heading">
        <h2>投稿レシピ</h2>
    </div>

    <div class="recipe-list">
        @foreach ($recipes as $recipe)
        <a href="/recipe/{{ $recipe->id }}" class="recipe-card">
            <div class="image-wrapper">
                <img src="{{ asset('storage/'.$recipe->image) }}" alt="{{ $recipe->name }}" class="recipe-image">
            </div>
            <p class="recipe-name">{{ $recipe->name }}</p>
        </a>
        @endforeach
    </div>
</div>
@endsection