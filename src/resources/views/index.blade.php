@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('search')
@include('layouts.search_bar')
@endsection

@section('nav')
@include('layouts.header_nav')
@endsection

@section('content')
<div class="index-content">
    <div class="index-content__header">
        <h2>{{ $message }}</h2>
        @if ($selectedAllergies->count())
        <p class="allergy-text">
            除外アレルギー：{{ $selectedAllergies->implode('、') }}
        </p>
        @endif
    </div>
    <div class="tabs">
        <a href="{{ route('recipes.list', array_merge(request()->all(), ['tab' => 'recommend'])) }}" class="{{ $tab === 'recommend' ? 'active' : '' }}">おすすめ</a>
        <a href="{{ route('recipes.list', array_merge(request()->all(), ['tab' => 'mylist'])) }}" class="{{ $tab === 'mylist' ? 'active' : '' }}">お気に入り</a>
    </div>

    <div class="recipe-list">
        @forelse ($recipes as $recipe)
        <a href="{{ route('recipe.show', ['recipe_id' => $recipe->id]) }}" class="recipe-card">
            <div class="image-wrapper">
                <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->name }}" class="recipe-image">
            </div>
            <p class="recipe-name">{{ $recipe->name }}</p>
        </a>
        @empty
        <p class="message">該当するレシピが見つかりませんでした。</p>
        @endforelse
    </div>
    <div class="pagination">
        {{ $recipes->appends(request()->query())->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection