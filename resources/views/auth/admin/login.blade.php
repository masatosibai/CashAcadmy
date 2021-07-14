@extends('layouts.layout') @component('components.header') @endcomponent
@section('content')
<div id="admin-login">
    <div class="admin-login-wrap">
        <form method="POST" action="/admin/login">
            @csrf
            <div style="text-align: center; margin-bottom: 2%">
                @if ($errors->has('email'))
                <p class="error-message">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="login-email-field">
                <label>メールアドレス</label>
                <input name="email" value="" type="text" />
            </div>
            <div class="login-password-field">
                <label>パスワード</label>
                <input name="password" value="" type="text" />
                @if ($errors->has('password'))
                <p class="error-message">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="login-button-field">
                <button type="submit" name="login"><p>ログイン</p></button>
            </div>
        </form>
    </div>
</div>

@endsection
