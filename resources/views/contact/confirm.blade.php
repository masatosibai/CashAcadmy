@extends('layouts.layout') @section('content')
<div id="confirm">
    <div class="confirmwrap">
        <div class="comfirmBox">
            <form
                method="POST"
                action="{{ route('contact.send') }}"
                autocomplete="off"
            >
                @csrf
                <input
                    name="month"
                    value="{{ $inputs['month'] }}"
                    type="hidden"
                />
                <input
                    name="year"
                    value="{{ $inputs['year'] }}"
                    type="hidden"
                />
                <input name="day" value="{{ $inputs['day'] }}" type="hidden" />
                <input
                    name="time"
                    value="{{ $inputs['time'] }}"
                    type="hidden"
                />
                <input
                    name="familyName"
                    value="{{ $inputs['familyName'] }}"
                    type="hidden"
                />
                <input
                    name="firstName"
                    value="{{ $inputs['firstName'] }}"
                    type="hidden"
                />
                <input
                    name="email"
                    value="{{ $inputs['email'] }}"
                    type="hidden"
                />
                <input
                    name="telNumber"
                    value="{{ $inputs['telNumber'] }}"
                    type="hidden"
                />
                <div class="confirmlabel bottom-border" style="margin-top: 10%">
                    <label class="item-name">予約日</label>
                    <label
                        >{{ $inputs["year"] }}/ {{ $inputs["month"] }}/
                        {{ $inputs["day"] }}</label
                    >
                </div>
                <div class="confirmlabel bottom-border">
                    <label class="item-name">お名前</label>
                    <label
                        >{{ $inputs["familyName"] }}
                        {{ $inputs["firstName"] }}</label
                    >
                </div>
                <div class="confirmlabel bottom-border">
                    <label class="item-name">メールアドレス</label>
                    <label>{{ $inputs["email"] }}</label>
                </div>
                <div class="confirmlabel">
                    <label class="item-name">電話番号</label>
                    <label> {{ $inputs["telNumber"] }}</label>
                </div>
                <div class="submit-button">
                    <button type="submit" name="action" value="submit">
                        <p>送信する</p>
                    </button>
                </div>
                <div class="fix-input-button">
                    <button type="submit" name="action" value="back">
                        入力内容修正
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
