@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endsection

@section('nav')
@include('layouts.header_nav')
@endsection

@section('content')
<div class="post-content">
    <div class="post-title">
        <h2>レシピ投稿</h2>
    </div>
    <form action="/post" class="post-form" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="recipe-img">
            <p class="recipe-img__title">レシピ画像</p>
            <div class="image_output" id="list">
                <label for="recipe_image" class="image-label">画像を選択する</label>
            </div>
            <input type="file" id="recipe_image" class="image" name="recipe_image" hidden>
            <div class="form__error">
                @error('recipe_image')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="recipe-description">
            <h3>レシピ名と説明</h3>
            <div class="form__group">
                <label for="name" class="form__group-label">レシピ名</label>
                <input id="name" type="text" class="form-name__input" name="name" value="{{ old('name') }}">
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="allergy__group">
                <label class="allergy__group-label">アレルギー</label>
                <div class="allergy-list">
                    @foreach($allergies as $allergy)
                    <input type="checkbox" id="allergy_{{ $allergy->id }}" value="{{ $allergy->id }}" {{ in_array($allergy->id, old('allergy_recipe', [])) ? 'checked' : '' }} name="allergy_recipe[]" class="allergy-checkbox">
                    <label for="allergy_{{ $allergy->id }}" class="allergy-btn">
                    {{ $allergy->name }}
                    </label>
                    @endforeach
                </div>
                <div class="form__error">
                    @error('allergy_recipe')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <label class="form__group-label">レシピの説明</label>
                <textarea class="description" cols="30" rows="5" name="description" id="description">{{ old('description') }}</textarea>
                <div class="form__error">
                    @error('description')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="recipe-detail">
            <h3>材料と作り方</h3>
            <div class="form__group">
                <label for="servings" class="form__group-label">出来上がり量</label>
                <input id="servings" type="text" class="form-servings__input" name="servings" placeholder="例：2人分、15cm型1台分" value="{{ old('servings') }}">
            </div>
            <div class="form__group">
                <label class="form__group-label">材料</label>
                <div id="ingredient-list">
                    @for ($i = 0; $i < max(2, count(old('ingredients', []))); $i++)
                    <div class="ingredient-item" style="margin-bottom:10px;">
                        <input type="text" class="form-ingredient__input" name="ingredients[]" placeholder="材料名" value="{{ old('ingredients.'.$i) }}">
                        <input type="text" class="quantity" name="quantities[]" placeholder="分量" value="{{ old('quantities.'.$i) }}">
                    </div>
                    @endfor
                </div>
                <button type="button" id="add-ingredient" class="ingredient-add">
                    <span class="ingredientAddIcon">+ 材料を追加</span>
                </button>
            </div>

            <hr>

            <div class="form__group">
                <label class="form__group-label">作り方</label>
                <div id="step-list">
                    @for ($i = 0; $i < max(2, count(old('step', []))); $i++)
                    <div class="step-item" style="margin-bottom: 10px;">
                        <span class="step-number">{{ $i + 1 }}</span>
                        <input type="text" class="form-step__input" name="steps[]" placeholder="作り方" value="{{ old('steps.' .$i) }}">
                    </div>
                    @endfor
                </div>
                <button type="button" id="add-step" class="ingredient-add">
                    <span class="ingredientAddIcon">+ 工程を追加</span>
                </button>
            </div>
            <div class="form__group">
                <label for="tips" class="form__group-label">ポイント・コツ</label>
                <input id="tips" type="text" class="form-tips__input" name="tips" value="{{ old('tips') }}">
                <div class="form__error">
                    @error('tips')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__btn">
            <button class="form__btn-submit" type="submit">投稿する</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('recipe_image').addEventListener('change', function (e) {
        const list = document.getElementById('list');

        const file = e.target.files[0];
        if (!file) return;

        const img = document.createElement('img');
        img.src = URL.createObjectURL(file);
        img.className = 'reader_image';

        list.innerHTML = '';
        list.appendChild(img);
    });

    document.getElementById('add-ingredient').addEventListener('click', function() {
        const container = document.getElementById('ingredient-list');
        const newItem = document.createElement('div');
        newItem.className = 'ingredient-item';
        newItem.style.marginBottom = '10px';
        newItem.innerHTML = `
            <input type="text" name="ingredients[]" class="form-ingredient__input" placeholder="材料名">
            <input type="text" name="quantities[]" class="quantity" placeholder="分量">
        `;
        container.appendChild(newItem);
    });

    document.getElementById('add-step').addEventListener('click', function() {
        const container = document.getElementById('step-list');
        const stepCount = container.getElementsByClassName('step-item').length + 1;
        const newItem = document.createElement('div');
        newItem.className = 'step-item';
        newItem.style.marginBottom = '10px';
        newItem.innerHTML = `
            <span class="step-number">${stepCount}</span>
            <input type="text" name="steps[]" class="form-step__input" placeholder="作り方の説明">
        `;
        container.appendChild(newItem);
    });
</script>
@endsection