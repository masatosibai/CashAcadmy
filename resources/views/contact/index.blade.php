@extends('layouts.layout') @section('content')
<div id="contact">
    <div class="contactwrap">
        <div class="input-field">
            <div id="researvationDay">
                <p>
                    {{ Session::get("year") }}年 {{ Session::get("month") }}月
                    {{ Session::get("day") }}日
                    {{ Session::get("time") }}:00～{{Session::get("time")+1}}:00
                </p>
            </div>
            <form
                method="POST"
                action="{{ route('contact.confirm') }}"
                autocomplete="off"
            >
                @csrf
                <input
                    name="month"
                    value="{{ Session::get('month') }}"
                    type="hidden"
                />
                <input
                    name="year"
                    value="{{ Session::get('year') }}"
                    type="hidden"
                />
                <input
                    name="day"
                    value="{{ Session::get('day') }}"
                    type="hidden"
                />
                <input
                    name="time"
                    value="{{ Session::get('time')}}"
                    type="hidden"
                />
                <div id="nameBox-input">
                    <label>お名前</label>
                    <input
                        name="familyName"
                        value="{{ old('familyName') }}"
                        type="text"
                    />
                    <input
                        name="firstName"
                        value="{{ old('firstName') }}"
                        type="text"
                    />
                    @if ($errors->has('familyName'))
                    <p class="error-message">
                        {{ $errors->first('familyName') }}
                    </p>
                    @endif @if ($errors->has('firstName'))
                    <p class="error-message">
                        {{ $errors->first('firstName') }}
                    </p>
                    @endif
                </div>
                <div class="nameExample">
                    <div class="firstName">
                        <p>ex)山田</p>
                    </div>
                    <div class="secondName">
                        <p>ex ) 太郎</p>
                    </div>
                </div>
                <div class="email-input-field">
                    <label>メールアドレス</label>
                    <input
                        name="email"
                        value="{{ old('email') }}"
                        type="text"
                    />
                    @if ($errors->has('email'))
                    <p class="error-message">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="email-Example">
                    <p>ex)sample@sample.com</p>
                </div>
                <div class="telnumber-input-field">
                    <label>電話番号</label>
                    <input
                        name="telNumber"
                        value="{{ old('telNumber') }}"
                        type="text"
                    />
                    @if ($errors->has('telNumber'))
                    <p class="error-message">
                        {{ $errors->first('telNumber') }}
                    </p>
                    @endif
                </div>
                <div class="telnumber-Example">
                    <p>ex)00011112222<br />※ハイフンなしで入力してください</p>
                </div>
                <div class="privacy-policy">
                    <p>
                        利用規約・プライバシーポリシーをお読みの上、同意して送信して下さい。

                        <br />

                        ※無料カウンセリングは、オンライン(zoom）のマンツーマンで行います。

                        <br />
                        ※所要時間は約1時間です
                        <br />
                        ※無理な勧誘は一切しません。
                        <br />
                    </p>
                </div>

                <div class="comfirm-button">
                    <button type="submit">
                        <p>入力内容確認</p>
                    </button>
                </div>
                <div class="back-home">
                    <a href="/">戻る</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
