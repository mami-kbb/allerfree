@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection


@section('nav')
@include('layouts.header_nav')
@endsection

@section('content')
<div class="show-content">
    <div class="top-area">
        <div class="image-area">
            <img src="{{ asset('storage/'.$recipe->image) }}" alt="{{ $recipe->name }}">
        </div>
        <div class="heading-area">
            <div class="recipe-name">
                <h3>{{ $recipe->name }}</h3>
            </div>
            <div class="user-info">
                <span class="title">投稿者：</span>
                <span class="user-icon">
                    @if ($recipe->user && $recipe->user->profile && $recipe->user->profile->profile_image)
                    <img src="{{ asset('storage/' . $recipe->user->profile->profile_image) }}" class="user-icon__img">
                    @else
                    <img class="user-icon__img" src="{{ asset('/images/icon.png') }}" alt="デフォルトアイコン">
                    @endif
                </span>
                <span class="user-name">{{ $recipe->user->name ?? '退会済みユーザー' }}</span>
            </div>
            <div class="recipe-description">
                <h4>レシピ説明</h4>
                <p class="description">{{ $recipe->description }}</p>
            </div>

            <div class="allergy">
                <div class="allergy-list">
                    <span class="allergy-label">該当アレルギー：</span>
                    @foreach($recipe->allergies as $allergy)
                    <span class="allergy-item">{{ $allergy->name }}</span>
                    @endforeach
                </div>
            </div>

            <div class="recipe-action">
                <div class="recipe-liked">
                    @auth
                    <form action="{{ route('like', ['id' => $recipe->id]) }}" class="liked-form" method="post">
                        @csrf
                        <button class="like-btn">
                            <img src="{{ asset($isLiked ? '/images/heart_logo_pink.png' : '/images/heart_logo.png') }}" alt="いいね" class="like-btn__img">
                        </button>
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="like-btn">
                        <img src="{{ asset('/images/heart_logo.png') }}" alt="いいね" class="like-btn__img">
                    </a>
                    @endauth
                    <p class="like-count" data-testid="like-count">{{ $likesCount }}</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="under-area">
        <div class="detail-left">
            <div class="ingredient">
                <h4>材料({{ $recipe->servings }})</h4>
                <div class="ingredient-list">
                    @foreach($recipe->ingredients as $ingredient)
                    <div class="ingredient-row">
                        <span class="name">{{ $ingredient->name}}</span>
                        <span class="quantity">{{ $ingredient->pivot->quantity }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="detail-right">
            <div class="step">
                <h4>作り方</h4>
                <div class="step-list">
                    @foreach($recipe->steps as $step)
                    <div class="step-row">
                        <span class="step-number">step{{ $step->step_number }}：</span>
                        <p class="step-content">{{ $step->content }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tips">
                <h4>コツ・ポイント</h4>
                <p class="tips-text">{!! nl2br(e($recipe->tips)) !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection