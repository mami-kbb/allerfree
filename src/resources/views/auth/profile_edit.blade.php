@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile_edit.css') }}">
@endsection



@section('nav')
@include('layouts.header_nav')
@endsection

@section('content')
<div class="profile-form__content">
    <div class="profile-form__heading">
        <h2>プロフィール設定</h2>
    </div>
    <form action="/mypage/profile" class="profile-form" method="post" enctype="multipart/form-data" novalidate>
        @method('patch')
        @csrf
        <div class="top-content">
            <div class="image_output" id="list">
                @if ($profile && $profile->profile_image)
                <img src="{{ asset('storage/' . $profile->profile_image) }}" class="reader_image">
                @else
                <img class="reader_image" src="{{ asset('/images/icon.png') }}" alt="">
                @endif
            </div>
            <div class="image-control">
                <label for="profile_image" class="image-label">画像を選択する</label>
                <input type="file" id="profile_image" class="image" name="profile_image" hidden>
                @error('profile_image')
                    <p class="form__error image-error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="under-content">
            <div class="form__group">
                <div class="form__group-item">
                    <label for="name" class="form__group-label">ユーザー名</label>
                    <input id="name" type="text" class="form__group-input" name="name" value="{{ old('name', $user->name) }}">
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-item">
                    <label for="allergy" class="form__group-label">アレルギー</label>
                    <div class="allergy-list">
                        @foreach($allergies as $allergy)
                        <input type="checkbox" id="allergy_{{ $allergy->id }}" value="{{ $allergy->id }}" {{ in_array($allergy->id, old('allergy_recipe', [])) ? 'checked' : '' }} name="allergy_recipe[]"  class="allergy-checkbox">
                        <label for="allergy_{{ $allergy->id }}" class="allergy-btn">{{ $allergy->name }}</label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-item">
                    <label for="comment" class="form__group-label">自己PR</label>
                    <input id="comment" type="text" class="form__group-comment" name="comment" value="{{ old('comment', $profile->comment ?? '') }}">
                </div>
            </div>
            <div class="form__btn">
                <button class="form__btn-submit" type="submit">更新する</button>
            </div>
        </div>
    </form>
</div>
<script>
    document.getElementById('profile_image').onchange = function (event) {
    const list = document.getElementById('list');
    list.innerHTML = '';

    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function (e) {
        const img = document.createElement('img');
        img.src = e.target.result;
        img.className = 'reader_image';
        list.appendChild(img);
    };
    reader.readAsDataURL(file);
};
</script>
@endsection