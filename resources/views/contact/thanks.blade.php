@extends('layouts.layout') @section('content')
<div id="thanks-page">
    <div class="thanks-title"><p>お問い合わせありがとうございました。</p></div>
    <div class="free-counsel-field">
        <div class="free-counsel-title"><p>30秒で申込み</p></div>
        <div class="process-counsel-title">
            <p>無料カウンセリングまでの流れ</p>
        </div>
        <div class="process-counsel"><p>1 フォームから仮予約</p></div>
        <div class="process-counsel"><p>2 LINEの追加・名前の送信</p></div>
        <div class="process-counsel"><p>3 予約確定（日程調整）</p></div>
        <div class="free-cousel-message">
            <p>
                LINEを追加して名前を送信<br />
                LINEにて無料カウンセリングの日程調整をします。<br />
                下の「友だち追加」ボタンからLINEを追加したあと、LINEにお名前をお送りください。
            </p>
        </div>
    </div>

    <div class="line-field">
        <div class="line-title"><p>LINEを追加して名前を送信</p></div>
        <div class="add-linefriend">
            <img src="/img/line_icon.png" alt="line追加" />
        </div>
        <div class="line-field-message">
            <p>
                LINEにて無料カウンセリングの日程調整をします。<br />
                上の「友だち追加」ボタンからLINEを追加したあと、LINEにお名前をお送りください。
            </p>
        </div>
    </div>

    <div class="free-counsel-content-field">
        <div class="free-counsel-content-title">
            <p>無料カウンセリングの内容</p>
        </div>
        <div class="free-counsel-content bottom-border">
            <div class="item"><p>形式</p></div>
            <div class="content"><p>オンライン（ZOOM）で約60分</p></div>
        </div>
        <div class="free-counsel-content bottom-border">
            <div class="item"><p>料金</p></div>
            <div class="content"><p>無料 ※1人につき1回までの受講</p></div>
        </div>
        <div class="free-counsel-content">
            <div class="item"><p>内容</p></div>
            <div class="content">
                <p>
                    ①現状ヒアリングと分析、②資産形成のポイント（下記参考）、③Cash
                    Academyの紹介<br />
                    ・貯金をする上でまず最初にやるべき<br />
                    ・3つのこと自分にあった投資スタイルの見つけ方<br />
                    ・賃貸とマイホームはどっちがいい？<br />
                    ・iDeCo、NISA、ふるさと納税の仕組み<br />
                    ・節税の仕組みとやるべきこと<br />
                    ・保険の選び方、入るべき保険と入らなくていい保険<br />
                </p>
            </div>
        </div>
    </div>
    @endsection
</div>
