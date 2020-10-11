@extends('layouts.app')

@section('content')
<div class="p-site-width">
    <form method="POST" action="{{ route('register') }}" class="p-form">
                        @csrf
        <h1 class="c-title">ユーザー登録</h1>

        <p class="c-text">Name</p>
        <input type="text" class="c-input" name="name" value="{{ old('name') }}" placeholder="name">

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <p class="c-text">Email</p>
        <input type="email" class="c-input" name="email" value="{{ old('email') }}" placeholder="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <p class="c-text">Password</p>
        <input type="password" class="c-input" name="password" placeholder="password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <p class="c-text">Password Confirm</p>
        <input type="password" class="c-input" name="password_confirmation" placeholder="password confirm">

        <p class="c-text"><a href="{{ route('rule.show')}}" class="c-a">利用規約</a>に同意して登録する。</p>

        <div style="margin-bottom: 32px"></div>

        <input type="submit" class="c-btn" value="登録">

    </form>
</div>
@endsection
