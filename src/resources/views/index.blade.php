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
    <div class="tabs">
        <a href="/?tab=recommend&keyword={{ request('keyword') }}" class="{{ $tab === 'recommend' ? 'active' : '' }}">おすすめ</a>
        <a href="/?tab=mylist&keyword={{ request('keyword') }}" class="{{ $tab === 'mylist' ? 'active' : '' }}">お気に入り</a>
    </div>

    <div class="recipe-list">
        @foreach ($recipes as $recipe)
        <a href="{{ route('detail', ['recipe_id' => $recipe->id]) }}" class="recipe-card">
            <div class="image-wrapper">
                <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->name }}" class="recipe-image">
            </div>
            <p class="recipe-name">{{ $recipe->name }}</p>
        </a>
        @endforeach
    </div>
</div>
@endsection