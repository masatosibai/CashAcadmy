@extends('layouts.layout') @component('components.homeheader') @endcomponent
@component('components.ResponsiveHomeHeader') @endcomponent @section('content')
<div id="HambergerMune" style="display: none">
    <div id="delete-hambergerMune">
        <p id="delete-hambergerMune-icon">×</p>
    </div>
    <nav class="HambergerMune-nav">
        <ul>
            <li class="hambergar-menu-list">
                <a href="#four-features-field">Cash Academyの特徴</a>
            </li>
            <li class="hambergar-menu-list">
                <a href="#learning-curriculum-example-field"
                    >学習カリキュラム</a
                >
            </li>
            <li class="hambergar-menu-list">
                <a href="#free-counsel-steps">無料カウンセリングの概要</a>
            </li>
            <li class="hambergar-menu-list">
                <a href="#review-field">お客様の声</a>
            </li>
            <li class="hambergar-menu-list">
                <a href="#question-field">よくある質問</a>
            </li>
            <div id="HambergerMune-button-field" class="hambergar-menu-list">
                <a href="#mainTable">無料カウンセリングはこちら</a>
            </div>
        </ul>
    </nav>
</div>
<div id="home-header-img"  class="pc-display" style="background-image: url({{
        $home_header[0]['pc-image']['url']
    }})">
    <div class="home-header-coments">
        <div class="home-header-comments-wrap">
            <div class="home-header-title">
                {!! $home_header[0]["title"] !!}
            </div>
            <div class="comment">
                {!! $home_header[0]["up-comment"] !!}
            </div>
            <div class="comment">
                 {!! $home_header[0]["down-comment"] !!}
            </div>

            <div class="home-header-performance">
                <div class="home-header-performance-wrap">
                    <div class="home-header-performance-card boder-r padding-r">
                        <div class="home-header-performance-card-title">
                             {!! $home_header[0]["performance-title1"] !!}
                        </div>
                        <div class="number">
                            <p>
                                <span class="big">{{ $home_header[0]["bignumber1"]}}</span
                                ><span class="small">{{ $home_header[0]["smallnumber1"]}}</span>
                            </p>
                        </div>
                        <div class="boder-r"></div>
                    </div>
                    <div
                        class="
                            home-header-performance-card
                            boder-r
                            padding-center
                        "
                    >
                        <div class="home-header-performance-card-title">
                            {!! $home_header[0]["performance-title2"] !!}
                        </div>
                        <div class="number">
                            <p>
                                <span class="big">{{ $home_header[0]["bignumber2"]}}</span
                                ><span class="small">{{ $home_header[0]["smallnumber2"]}}</span>
                            </p>
                        </div>
                    </div>

                    <div class="home-header-performance-card padding-l">
                        <div class="home-header-performance-card-title">
                               {!! $home_header[0]["performance-title3"] !!}
                        </div>
                        <div class="number">
                            <p>
                                <span class="big">{{ $home_header[0]["bignumber3"]}}</span
                                ><span class="small">{{ $home_header[0]["smallnumber3"]}}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="research-day">
                <p>{!! $home_header[0]["researchday"]!!}</p>
            </div>
        </div>
    </div>
</div>
<div id="home-header-img"  class="sp-display" style="display: none; background-image: url({{
        $home_header[0]['sp-image']['url']
    }})">
    <div class="home-header-coments">
        <div class="home-header-comments-wrap">
            <div class="home-header-title">
                {!! $home_header[0]["title"] !!}
            </div>
            <div class="comment">
                {!! $home_header[0]["up-comment"] !!}
            </div>
            <div class="comment">
                 {!! $home_header[0]["down-comment"] !!}
            </div>

            <div class="home-header-performance">
                <div class="home-header-performance-wrap">
                    <div class="home-header-performance-card boder-r padding-r">
                        <div class="home-header-performance-card-title">
                             {!! $home_header[0]["performance-title1"] !!}
                        </div>
                        <div class="number">
                            <p>
                                <span class="big">{{ $home_header[0]["bignumber1"]}}</span
                                ><span class="small">{{ $home_header[0]["smallnumber1"]}}</span>
                            </p>
                        </div>
                        <div class="boder-r"></div>
                    </div>
                    <div
                        class="
                            home-header-performance-card
                            boder-r
                            padding-center
                        "
                    >
                        <div class="home-header-performance-card-title">
                            {!! $home_header[0]["performance-title2"] !!}
                        </div>
                        <div class="number">
                            <p>
                                <span class="big">{{ $home_header[0]["bignumber2"]}}</span
                                ><span class="small">{{ $home_header[0]["smallnumber2"]}}</span>
                            </p>
                        </div>
                    </div>

                    <div class="home-header-performance-card padding-l">
                        <div class="home-header-performance-card-title">
                               {!! $home_header[0]["performance-title3"] !!}
                        </div>
                        <div class="number">
                            <p>
                                <span class="big">{{ $home_header[0]["bignumber3"]}}</span
                                ><span class="small">{{ $home_header[0]["smallnumber3"]}}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="research-day">
                <p>{!! $home_header[0]["researchday"]!!}</p>
            </div>
        </div>
    </div>
</div>
<div id="recommend-threemerit-field">
    <div class="card">
        <p class="number">01</p>
        <p class="title">{{ $recommend_threemerit[0]["title"] }}</p>
        <div class="card-img">
            <img
                src="{{ $recommend_threemerit[0]['img']['url'] }}"
                alt="{{ $recommend_threemerit[0]['title'] }}"
            />
        </div>
        <div class="card-comment">
            <p>{{ $recommend_threemerit[0]["discription"] }}</p>
        </div>
    </div>
    <div class="card">
        <p class="number">02</p>
        <p class="title">{{ $recommend_threemerit[1]["title"] }}</p>
        <div class="card-img">
            <img
                src="{{ $recommend_threemerit[1]['img']['url'] }}"
                alt="{{ $recommend_threemerit[1]['title'] }}"
            />
        </div>
        <div class="card-comment">
            <p>{{ $recommend_threemerit[1]["discription"] }}</p>
        </div>
    </div>
</div>
<div id="four-features-field">
    <div class="title title-font pc-display">
        <p>Cash Academyの4つの特徴</p>
    </div>
    <div class="title title-font sp-display" style="display: none">
        <p>Cash Academyの</p>
        <p>4つの特徴</p>
    </div>
    <div class="short-under-line" style="display: none"></div>
    <div class="card-wrap">
        <div class="card margin-r">
            <div class="number">
                <p>{{ $four_features_field[0]["number"] }}</p>
            </div>
            <div class="card-title">
                {!!$four_features_field[0]["title"]!!}
            </div>
            <div class="card-img">
                <img
                    src="{{ $four_features_field[0]['image']['url'] }}"
                    alt="$four_features_field[0]['title']"
                />
            </div>
            <div class="comment pc-display">
                {!!$four_features_field[0]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                {!!$four_features_field[0]['sp-discription']!!}
            </div>
        </div>
        <div class="card margin-r">
            <div class="number">
                <p>{{ $four_features_field[1]["number"] }}</p>
            </div>
            <div class="card-title">
                {!!$four_features_field[1]["title"]!!}
            </div>
            <div class="card-img">
                <img
                    src="{{ $four_features_field[1]['image']['url'] }}"
                    alt="$four_features_field[1]['title']"
                />
            </div>
            <div class="comment pc-display">
                {!!$four_features_field[1]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                {!!$four_features_field[1]['sp-discription']!!}
            </div>
        </div>
        <div class="card margin-r">
            <div class="number">
                <p>{{ $four_features_field[2]["number"] }}</p>
            </div>
            <div class="card-title">
                {!!$four_features_field[2]["title"]!!}
            </div>
            <div class="card-img">
                <img
                    src="{{ $four_features_field[2]['image']['url'] }}"
                    alt="$four_features_field[2]['title']"
                />
            </div>
            <div class="comment pc-display">
                {!!$four_features_field[2]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                {!!$four_features_field[2]['sp-discription']!!}
            </div>
        </div>
        <div class="card">
            <div class="number">
                <p>{{ $four_features_field[3]["number"] }}</p>
            </div>
            <div class="card-title">
                {!!$four_features_field[3]["title"]!!}
            </div>
            <div class="card-img">
                <img
                    src="{{ $four_features_field[3]['image']['url'] }}"
                    alt="$four_features_field[3]['title']"
                />
            </div>
            <div class="comment pc-display">
                {!!$four_features_field[3]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                {!!$four_features_field[3]['sp-discription']!!}
            </div>
        </div>
    </div>
</div>
<div id="learning-curriculum-example-field" style="background-image: url({{
        $learning_curriculum_example_field[0]['image']['url']
    }})">
    <div class="learning-curriculum-example">
        <div class="title title-font">
            <p>学習カリキュラム例</p>
        </div>
        <div class="short-under-line"></div>
        <div class="learning-curriculum-example-wrap">
            <div class="card-field">
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">1</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[1]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[1]['pc-discription']!!}
                    </div>
                </div>
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">５</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[5]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[5]['pc-discription']!!}
                    </div>
                </div>
            </div>
            <div class="card-field">
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">2</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[2]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[2]['pc-discription']!!}
                    </div>
                </div>
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">6</p>
                        <p class="content-title">保険の選び方</p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[6]['pc-discription']!!}
                    </div>
                </div>
            </div>
            <div class="card-field">
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">3</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[3]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[3]['pc-discription']!!}
                    </div>
                </div>
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">7</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[7]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[7]['pc-discription']!!}
                    </div>
                </div>
            </div>
            <div class="card-field">
                <div class="card">
                    <div class="content-wrap">
                        <p class="number">4</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[4]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[4]['pc-discription']!!}
                    </div>
                </div>
                <div class="card">
                    <div class="content-wrap">
                        <p class="number">8</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[8]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[8]['pc-discription']!!}
                    </div>
                </div>
            </div>
            <div id="responsive-card-field">
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">1</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[1]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[1]['sp-discription']!!}
                    </div>
                </div>
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">2</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[2]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[1]['sp-discription']!!}
                    </div>
                </div>
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">3</p>
                        <p></p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[3]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[1]['sp-discription']!!}
                    </div>
                </div>
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">4</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[4]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[4]['sp-discription']!!}
                    </div>
                </div>
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">５</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[5]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[5]['sp-discription']!!}
                    </div>
                </div>
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">6</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[6]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[6]['sp-discription']!!}
                    </div>
                </div>
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">7</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[7]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[7]['sp-discription']!!}
                    </div>
                </div>
                <div class="card">
                    <div class="content-wrap">
                        <p class="number">8</p>
                        <p class="content-title">
                            {!!$learning_curriculum_example_field[8]["title"]!!}
                        </p>
                    </div>
                    <div class="content">
                        {!!$learning_curriculum_example_field[8]['sp-discription']!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="free-counsel-steps">
    <div class="free-counsel-steps-wrap">
        <div class="title title-font"><p>無料カウンセリング実施中</p></div>
        <div class="short-under-line"></div>
        <div class="step">
            <div class="step-title bottom-border">
                {!!$free_counsel_steps[1]["title"]!!}
            </div>
            <div class="comment pc-display">
                {!!$free_counsel_steps[1]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                {!!$free_counsel_steps[1]['sp-discription']!!}
            </div>
        </div>
        <div class="step">
            <div class="step-title bottom-border">
                {!!$free_counsel_steps[2]["title"]!!}
            </div>
            <div class="comment pc-display">
                {!!$free_counsel_steps[2]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                {!!$free_counsel_steps[2]['sp-discription']!!}
            </div>
            <div class="points">
                <ul>
                    {!!$free_counsel_steps[2]['list']!!}
                </ul>
            </div>
        </div>
        <div class="step">
            <div class="step-title bottom-border">
                {!!$free_counsel_steps[3]["title"]!!}
            </div>
            <div class="comment pc-display">
                {!!$free_counsel_steps[3]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                {!!$free_counsel_steps[3]['sp-discription']!!}
            </div>
        </div>
    </div>
</div>

<div
    id="free-counsel-process"
    style="background-image: url({{
        $free_counsel_process[0]['image']['url']
    }})"
>
    <div class="title title-font">
        <p class="pc-display">{!!$free_counsel_process[0]["title"]!!}</p>
        <p class="sp-display" style="display: none">
            無料カウンセリングの<br />流れ
        </p>
    </div>
    <div class="short-under-line pc-display"></div>
    <div class="comment">
        {!!$free_counsel_process[0]["pc-discription"]!!}
    </div>
</div>

<div id="changeWeek" class="thisWeekCalendar">
    <div class="changeWeeek-button-field"></div>
    <div class="today">
        <p>{{ $thisWeekYear }}年{{ $thisWeekMonth }}月</p>
    </div>
    <div id="next-week" class="changeWeeek-button-field">
        <button type="submit" name="nextWeek" value="true">来週</button>
    </div>
</div>
<div id="mainTable" class="thisWeekCalendar">
    <table>
        <tr>
            @foreach($thisWeekDays as $v)
            <th>{{ $v }}</th>
            @endforeach
        </tr>
        @foreach($thisWeek as $key=>$a)
        <tr>
            <td>{{ $key }}</td>
            @foreach($a as $key=>$b)
            <td>
                <form method="POST" action="{{ route('contact.index') }}">
                    @csrf @foreach($b as $key=> $c) @if($key == "year")
                    <input name="year" value="{{ $c }}" type="hidden" />
                    @endif @if($key == "month")
                    <input name="month" value="{{ $c }}" type="hidden" />
                    @endif @if($key == "day")
                    <input name="day" value="{{ $c }}" type="hidden" />
                    @endif @if($key == "hour")
                    <input name="time" value="{{ $c }}" type="hidden" />
                    @endif @if($key == "is_resevation") @if($c ==0)
                    <button
                        class="select_day_hour_button"
                        type="submit"
                        name="action"
                        value="selected_day_hour"
                        style="color: red"
                    >
                        〇
                    </button>
                    @else
                    <p style="color: blue">×</p>
                    <p>@endif @endif @endforeach</p>
                </form>

                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</div>
<div id="changeWeek" class="nextWeekCalendar" style="display: none">
    <div id="this-week" class="changeWeeek-button-field">
        <button type="submit" name="nextWeek" value="">今週</button>
    </div>
    <div class="today">
        <p>{{ $thisWeekYear }}年{{ $thisWeekMonth }}月</p>
    </div>
    <div class="changeWeeek-button-field"></div>
</div>
<div id="mainTable" class="nextWeekCalendar" style="display: none">
    <table>
        <tr>
            @foreach($nextWeekDays as $v)
            <th>{{ $v }}</th>
            @endforeach
        </tr>
        @foreach($nextWeek as $key=>$a)
        <tr>
            <td>{{ $key }}</td>
            @foreach($a as $key=>$b)
            <td>
                <form method="POST" action="{{ route('contact.index') }}">
                    @csrf @foreach($b as $key=> $c) @if($key == "year")
                    <input name="year" value="{{ $c }}" type="hidden" />
                    @endif @if($key == "month")
                    <input name="month" value="{{ $c }}" type="hidden" />
                    @endif @if($key == "day")
                    <input name="day" value="{{ $c }}" type="hidden" />
                    @endif @if($key == "hour")
                    <input name="time" value="{{ $c }}" type="hidden" />
                    @endif @if($key == "is_resevation") @if($c ==0)
                    <button
                        class="select_day_hour_button"
                        type="submit"
                        name="action"
                        value="selected_day_hour"
                        style="color: red"
                    >
                        〇
                    </button>
                    @else
                    <p style="color: blue">×</p>
                    <p>@endif @endif @endforeach</p>
                </form>

                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</div>

<div id="review-field">
    <div class="top-title title-font">
        <p>お客様の声</p>
    </div>
    <div class="short-under-line"></div>
    <div class="review-field-wrap">
        <div class="review">
            <div class="title">
                {!!$review_field[1]["title"]!!}
            </div>
            <div class="sp-review-img-comment">
                <div class="img">
                    <img
                        src="{{ $review_field[1]['image']['url'] }}"
                        alt="{{$review_field[1]['title']}}"
                    />
                </div>
                <div class="sp-comment sp-display" style="display: none">
                    <p class="name">{!!$review_field[1]["name"]!!}</p>
                    <br />
                    <p class="age-profession">{!!$review_field[1]["profession"]!!} </p>
                    <br />
                </div>
            </div>
            <div class="comment sp-display" style="display: none">
                <p class="before-after">受講前</p>
                <br />
                <div class="message">
                    {!!$review_field[1]["bc-class-discription"]!!}
                </div>
                <br />
                <p class="before-after">受講後</p>
                <br />
                <div class="message">
                     {!!$review_field[1]["af-class-discription"]!!}
                </div>
                <br />
            </div>
            <div class="comment pc-display">
                <p class="name">{!!$review_field[1]["name"]!!}</p>
                <br />
                <p class="age-profession">{!!$review_field[1]["profession"]!!}</p>
                <br />
                <p class="before-after">受講前</p>
                <br />
                <div class="message">
                    {!!$review_field[1]["bc-class-discription"]!!}
                </div>
                </p>
                <br />
                <p class="before-after">受講後</p>
                <br />
                <div class="message">
                    {!!$review_field[1]["af-class-discription"]!!}
                </div>
                </p>
                <br />
            </div>
        </div>
        <div class="review">
            <div class="title">
                {!!$review_field[1]["title"]!!}
            </div>
            <div class="sp-review-img-comment">
                <div class="img">
                    <img
                        src="{{ $review_field[1]['image']['url'] }}"
                        alt="{{$review_field[1]['title']}}"
                    />
                </div>
                <div class="sp-comment sp-display" style="display: none">
                    <p class="name">{!!$review_field[1]["name"]!!}</p>
                    <br />
                    <p class="age-profession">{!!$review_field[1]["profession"]!!} </p>
                    <br />
                </div>
            </div>
            <div class="comment sp-display" style="display: none">
                <p class="before-after">受講前</p>
                <br />
                <div class="message">
                    {!!$review_field[1]["bc-class-discription"]!!}
                </div>
                <br />
                <p class="before-after">受講後</p>
                <br />
                <div class="message">
                     {!!$review_field[1]["af-class-discription"]!!}
                </div>
                <br />
            </div>
            <div class="comment pc-display">
                <p class="name">{!!$review_field[1]["name"]!!}</p>
                <br />
                <p class="age-profession">{!!$review_field[1]["profession"]!!}</p>
                <br />
                <p class="before-after">受講前</p>
                <br />
                <div class="message">
                    {!!$review_field[1]["bc-class-discription"]!!}
                </div>
                </p>
                <br />
                <p class="before-after">受講後</p>
                <br />
                <div class="message">
                    {!!$review_field[1]["af-class-discription"]!!}
                </div>
                </p>
                <br />
            </div>
        </div>
        <div class="review">
            <div class="title">
                {!!$review_field[1]["title"]!!}
            </div>
            <div class="sp-review-img-comment">
                <div class="img">
                    <img
                        src="{{ $review_field[1]['image']['url'] }}"
                        alt="{{$review_field[1]['title']}}"
                    />
                </div>
                <div class="sp-comment sp-display" style="display: none">
                    <p class="name">{!!$review_field[1]["name"]!!}</p>
                    <br />
                    <p class="age-profession">{!!$review_field[1]["profession"]!!} </p>
                    <br />
                </div>
            </div>
            <div class="comment sp-display" style="display: none">
                <p class="before-after">受講前</p>
                <br />
                <div class="message">
                    {!!$review_field[1]["bc-class-discription"]!!}
                </div>
                <br />
                <p class="before-after">受講後</p>
                <br />
                <div class="message">
                     {!!$review_field[1]["af-class-discription"]!!}
                </div>
                <br />
            </div>
            <div class="comment pc-display">
                <p class="name">{!!$review_field[1]["name"]!!}</p>
                <br />
                <p class="age-profession">{!!$review_field[1]["profession"]!!}</p>
                <br />
                <p class="before-after">受講前</p>
                <br />
                <div class="message">
                    {!!$review_field[1]["bc-class-discription"]!!}
                </div>
                </p>
                <br />
                <p class="before-after">受講後</p>
                <br />
                <div class="message">
                    {!!$review_field[1]["af-class-discription"]!!}
                </div>
                </p>
                <br />
            </div>
        </div>        
    </div>
</div>

<div id="questionnaire-field">
    <div class="title title-font">
        <p>アンケート</p>
    </div>
    <div class="short-under-line"></div>
    <div class="questionnaire-field-wrap">
        <div class="questionnaire-card">
            <div class="questionnaire-card-title">{!!$questionnaire_field[1]["title"]!!}</div>
            <div class="number">
                <p>
                    <span class="big">4.6</span><span class="small">/ 5.0</span>
                </p>
            </div>
            <div class="comment">
                {!!$questionnaire_field[1]["pc-discription"]!!}
            </div>
            <div class="research-day">
                 {!!$questionnaire_field[1]["researchday"]!!}
            </div>
        </div>
        <div class="questionnaire-card">
            <div class="questionnaire-card-title">
                {!!$questionnaire_field[2]["title"]!!}
            </div>
            <div class="number">
                <p><span class="big">90</span><span class="small">％</span></p>
            </div>
            <div class="comment">
                 {!!$questionnaire_field[2]["pc-discription"]!!}
            </div>
            <div class="research-day">
                 {!!$questionnaire_field[1]["researchday"]!!}
            </div>
        </div>
        <div class="questionnaire-card">
            <div class="questionnaire-card-title">
              {!!$questionnaire_field[3]["title"]!!}
            </div>
            <div class="number">
                <p><span class="big">90</span><span class="small">％</span></p>
            </div>
            <div class="comment">
                 {!!$questionnaire_field[3]["pc-discription"]!!}
            </div>
            <div class="research-day">
                 {!!$questionnaire_field[1]["researchday"]!!}
            </div>
        </div>
    </div>
</div>

<div id="question-field">
    <div class="title title-font">
        <p>よくある質問</p>
    </div>
    <div class="short-under-line"></div>

    <div class="sp-question-field">
        <div>
            <div class="question-answer">
                <p class="pc-display">
                    <span class="question-mark">Q</span
                    ><span class="question"
                        > {{$question_field[2]["pc-title"]}} </span
                    >
                </p>
                <div class="sp-display questions-field" style="display: none">
                    <p class="question-mark">Q</p>
                    <div style="padding-top: 8%">
                        <p class="question">
                            {!!$question_field[2]["sp-title"]!!}
                        </p>
                    </div>
                </div>
                <div class="answer pc-display">
                    {!!$question_field[2]["pc-discription"]!!}
                </div>
                <div class="answer sp-display" style="display: none">
                    {!!$question_field[2]["sp-discription"]!!}
                </div>
            </div>

            <div class="question-answer">
                <p class="pc-display">
                    <span class="question-mark">Q</span
                    ><span class="question"
                        >{{$question_field[3]["pc-title"]}}</span
                    >
                </p>
                <div class="sp-display questions-field" style="display: none">
                    <p class="question-mark">Q</p>
                    <div style="padding-top: 8%">
                        {!!$question_field[3]["sp-title"]!!}
                    </div>
                </div>
                <div class="answer pc-display">
                {!!$question_field[3]["pc-discription"]!!}
                </div>
                <div class="answer sp-display" style="display: none">
                    {!!$question_field[3]["sp-discription"]!!}
                </div>
            </div>

            <div class="question-answer">
                <p class="pc-display">
                    <span class="question-mark">Q</span
                    ><span class="question"
                        >{{$question_field[4]["pc-title"]}}</span
                    >
                </p>
                <div class="sp-display questions-field" style="display: none">
                    <p class="question-mark">Q</p>
                    <div style="padding-top: 8%">
                        {!!$question_field[4]["sp-title"]!!}
                    </div>
                </div>
                <div class="answer pc-display">
                {!!$question_field[4]["pc-discription"]!!}
                </div>
                <div class="answer sp-display" style="display: none">
                    {!!$question_field[4]["sp-discription"]!!}
                </div>
            </div>

            <div class="question-answer">
                <p class="pc-display">
                    <span class="question-mark">Q</span
                    ><span class="question">{{$question_field[5]["pc-title"]}}</span>
                </p>
                <div class="sp-display questions-field" style="display: none">
                    <p class="question-mark">Q</p>
                    <div style="padding-top: 8%">
                        {!!$question_field[5]["sp-title"]!!}
                    </div>
                </div>
                <div class="answer pc-display">
                    {!!$question_field[5]["pc-discription"]!!}
                </div>
                <div class="answer sp-display" style="display: none">
                    {!!$question_field[5]["sp-discription"]!!}
                </div>
            </div>

            <div class="question-answer">
                <p class="pc-display">
                    <span class="question-mark">Q</span
                    ><span class="question"
                        >{{$question_field[6]["pc-title"]}}</span
                    >
                </p>
                <div class="sp-display questions-field" style="display: none">
                    <p class="question-mark">Q</p>
                    <div style="padding-top: 8%">
                        {!!$question_field[6]["sp-title"]!!}
                    </div>
                </div>
                <div class="answer pc-display">
                    {!!$question_field[6]["pc-discription"]!!}
                </div>
                <div class="answer sp-display" style="display: none">
                    {!!$question_field[6]["sp-discription"]!!}
                </div>
            </div>
        </div>
    </div>
</div>
@component('components.footer') @endcomponent @endsection
