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
<div id="home-header-img">
    <div class="home-header-coments">
        <div class="home-header-comments-wrap">
            <p class="home-header-title">
                短期間で<br />お金の教養を身につける
            </p>
            <div class="comment">
                <P>Cash Acdemyは投資初心者・未経験者の人が</P>
            </div>
            <div class="comment">
                <P>お金の「増やし方、貯め方、使い方」を学べるスクールです。</P>
            </div>

            <div class="home-header-performance">
                <div class="home-header-performance-wrap">
                    <div class="home-header-performance-card boder-r padding-r">
                        <div class="home-header-performance-card-title">
                            <p>受講満足度</p>
                        </div>
                        <div class="number">
                            <p>
                                <span class="big">4.6</span
                                ><span class="small">/ 5.0</span>
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
                            <p>20代・30代・40代<br />の割合</p>
                        </div>
                        <div class="number">
                            <p>
                                <span class="big">90</span
                                ><span class="small">％</span>
                            </p>
                        </div>
                    </div>

                    <div class="home-header-performance-card padding-l">
                        <div class="home-header-performance-card-title">
                            <p>投資未経験者<br />初心者の割合</p>
                        </div>
                        <div class="number">
                            <p>
                                <span class="big">90</span
                                ><span class="small">％</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="research-day">
                <p>※2021年4月時点での自社調べ</p>
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
                <!-- 専用コンサルタントと<br />
                    マンツーマン -->
                {!!$four_features_field[0]["title"]!!}
            </div>
            <div class="card-img">
                <img
                    src="{{ $four_features_field[0]['image']['url'] }}"
                    alt="$four_features_field[0]['title']"
                />
            </div>
            <div class="comment pc-display">
                <!-- プロのファイナンシャルコンサルタ</p><p>ントがマンツーマンであなたをサ</p><p>ポートします、</p>
                    <p>お金に関する知識はもちろん、目標</p><p>設定、最適な学習方法の提案、モチ</p><p>ベーションの維持</p><p>
                    などをサポートし、受講後も継続で</p><p>きるように習慣化することが可能で</p><p>す。 -->
                {!!$four_features_field[0]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                <!-- プロのファイナンシャルコンサルタントが</p><p>マンツーマンであなたをサポートします、</p><p>
                    お金に関する知識はもちろん、目標設定、</p><p>最適な学習方法の提案、モチベーションの</p><p>維持</p><p>
                    などをサポートし、受講後も継続できるよ</p><p>うに習慣化することが可能です。 -->
                {!!$four_features_field[0]['sp-discription']!!}
            </div>
        </div>
        <div class="card margin-r">
            <div class="number">
                <p>{{ $four_features_field[1]["number"] }}</p>
            </div>
            <div class="card-title">
                <!-- <p>一人ひとりに合わせた<br />カリキュラムの提供</p> -->
                {!!$four_features_field[1]["title"]!!}
            </div>
            <div class="card-img">
                <img
                    src="{{ $four_features_field[1]['image']['url'] }}"
                    alt=""
                />
            </div>
            <div class="comment pc-display">
                <!-- <p>
                    ファイナンシャルコンサルタントが</p><p>あなたの状況を分析し、あなたのた</p></p>めだけのカリキュラムを提供しま</p></p>す。</p></p>
                    これにより、必要なこと、興味があ</p></p>ることに集中して学習することがで</p></p>きます。
                </p> -->
                {!!$four_features_field[1]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                <!-- <p>
                    ファイナンシャルコンサルタントがあなた</p><p>の状況を分析し、あなたのためだけのカリ</p><p>キュラムを提供します。</p></p>
                    これにより、必要なこと、興味があること</p><p>に集中して学習することができます。
                </p> -->
                {!!$four_features_field[1]['sp-discription']!!}
            </div>
        </div>
        <div class="card margin-r">
            <div class="number">
                <p>{{ $four_features_field[2]["number"] }}</p>
            </div>
            <div class="card-title">
                <!-- <p>質問し放題の</p>
                <p>チャットサポートで疑問点が解決</p> -->
                {!!$four_features_field[2]["title"]!!}
            </div>
            <div class="card-img">
                <img
                    src="{{ $four_features_field[2]['image']['url'] }}"
                    alt=""
                />
            </div>
            <div class="comment pc-display">
                <!-- <p>
                    一般的なお金のことを相談できる相</p></p>手は限られます。CashAcademyで</p></p>は、わからない所は「すぐに」「何</p></p>回でも」相談可能です。
                </p> -->
                {!!$four_features_field[2]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                <!-- <p>
                    一般的なお金のことを相談できる相手は限</p></p>られます。CashAcademyでは、わからない</p></p>所は「すぐに」「何回でも」相談可能で</p></p>す。
                </p> -->
                {!!$four_features_field[2]['sp-discription']!!}
            </div>
        </div>
        <div class="card">
            <div class="number">
                <!-- <p>4</p> -->
                <p>{{ $four_features_field[3]["number"] }}</p>
            </div>
            <div class="card-title">
                <!-- <p>中立的な立場での<br />アドバイス</p> -->
                {!!$four_features_field[3]["title"]!!}
            </div>
            <div class="card-img">
                <img
                    src="{{ $four_features_field[3]['image']['url'] }}"
                    alt=""
                />
            </div>
            <div class="comment pc-display">
                <!-- <p>
                    お客様に寄り添ったサービスを提供</p></p>しています。そのため。保険や不動</p></p>産、投資信託などの金融商品を販売</p></p>営業するようなことは一切ないので</p></p>ご安心ください。
                </p> -->
                {!!$four_features_field[3]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                <!-- <p>
                    お客様に寄り添ったサービスを提供してい</p></p>ます。そのため。保険や不動産、投資信託</p></p>などの金融商品を販売営業するようなこと</p></p>は一切ないのでご安心ください。
                </p> -->
                {!!$four_features_field[3]['sp-discription']!!}
            </div>
        </div>
    </div>
</div>
<div id="learning-curriculum-example-field">
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
                        <!-- <p>最初に今の家計簿の健康状態を把握し、</p>
                        <p>何が課題化を突き詰めます。</p> -->
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
                        <!-- <p>国がやっている投資や節税についての優遇制</p>
                        <p>度について理解し、具体的な活用方法まで学</p>
                        <p>びます。</p> -->
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
                        <!-- <p>貯金するための口座設計。お金を使うときに</p>
                        <p>便利なツールを学びます。それにより楽に支</p>
                        <p>出が抑えられるお金が貯まりやすい環境を作</p>
                        <p>ります。</p> -->
                        {!!$learning_curriculum_example_field[2]['pc-discription']!!}
                    </div>
                </div>
                <div class="card bottom-border">
                    <div class="content-wrap">
                        <p class="number">6</p>
                        <p class="content-title">保険の選び方</p>
                    </div>
                    <div class="content">
                        <!-- <p>どんな保険に入り、どんな保険に入らなくて</p>
                        <p>いいのかを自分で判断できるようにします。</p> -->
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
                        <!-- <p>投資の種類と特徴、口座開設方法、リスクマ</p>
                        <p>ネジメント方法などを学び、投資の正しい知</p>
                        <p>識を身に着けます。</p> -->
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
                        <!-- <p>そもそもマイホームと賃貸はどちらのほうが</p>
                        <p>いいのなかど、大きな支出である住宅費に対</p>
                        <p>してどのように考え、工夫するのかについて</p>
                        <p>学びます。</p> -->
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
                        <!-- <p>3で自分にあった投資手法を見つけた上で、</p>
                        <p>シミュレーションをした後、実際に投資をは</p>
                        <p>じめていきます。</p> -->
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
                        <!-- <p>インフレ・デフレの仕組み、お金の変遷と今</p>
                        <p>後、お金の心理学など、知っておくことでお</p>
                        <p>金について考えるための土台を学びます。</p> -->
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
                        <!-- <p>最初に今の家計簿の健康状態を把握し、何が</p>
                        <p>課題化を突き詰めます。</p> -->
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
                        <!-- <p>貯金するための口座設計。お金を使うときに</p>
                        <p>便利なツールを学びます。それにより楽に支</p>
                        <p>出が抑えられるお金が貯まりやすい環境を作</p>
                        <p>ります。</p> -->
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
                        <!-- <p>投資の種類と特徴、口座開設方法、リスクマ</p>
                        <p>ネジメント方法などを学び、投資の正しい知</p>
                        <p>識を身に着けます。</p> -->
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
                        <!-- <p>3で自分にあった投資手法を見つけた上で、</p>
                        <p>シミュレーションをした後、実際に投資をは</p>
                        <p>じめていきます。</p> -->
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
                        <!-- <p>国がやっている投資や節税についての優遇制</p>
                        <p>度について理解し、具体的な活用方法まで学</p>
                        <p>びます。</p> -->
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
                        <!-- <p>どんな保険に入り、どんな保険に入らなくて</p>
                        <p>いいのかを自分で判断できるようにします。</p> -->
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
                        <!-- <p>そもそもマイホームと賃貸はどちらのほうが</p>
                        <p>いいのかなど、大きな支出である住宅費に対</p>
                        <p>してどのように考え、工夫するのかについて</p>
                        <p>学びます。</p> -->
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
                        <!-- <p>インフレ・デフレの仕組み、お金の変遷と今</p>
                        <p>後、お金の心理学など、知っておくことでお</p>
                        <p>金について考えるための土台を学びます。</p> -->
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
                <!-- <p>Step 1 現状のヒアリング分析</p> -->
                {!!$free_counsel_steps[1]["title"]!!}
            </div>
            <div class="comment pc-display">
                <!-- <p>
                    理想の状態、現在のお金の知識レベルをヒアリングし、お金の健康状態をクリアにします。
                </p>
                <p>
                    それにより、あなたのお金に関する根本的な課題を明確にします。
                </p> -->
                {!!$free_counsel_steps[1]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                <!-- <p>理想の状態、現在のお金の知識レベルをヒアリ</p>
                <p>ングし、お金の健康状態をクリアにします。</p>
                <p>それにより、あなたのお金に関する根本的な課題</p>
                <p>を明確にします。</p> -->
                {!!$free_counsel_steps[1]['sp-discription']!!}
            </div>
        </div>
        <div class="step">
            <div class="step-title bottom-border">
                <!-- <p>Step 2 現状のヒアリング分析</p> -->
                {!!$free_counsel_steps[2]["title"]!!}
            </div>
            <div class="comment pc-display">
                <!-- <p>
                    Step 1
                    で把握した課題を元に、あなたが資産形成をするときにポイントとなることをお伝え
                </p>
                <p>します。下記はその具体例です。</p> -->
                {!!$free_counsel_steps[2]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                <!-- <p>Step 1 で把握した課題を元に、あなたが資産形成</p>
                <p>をするときにポイントとなることをお伝えします。</p>
                <p>下記はその具体例です。</p> -->
                {!!$free_counsel_steps[2]['sp-discription']!!}
            </div>
            <div class="points">
                <ul>
                    <!-- <li>貯金をする上でまず最初にやるべき3つのこと</li>
                    <li>自分にあった投資スタイルの見つけ方</li>
                    <li>賃貸をマイホームはどっちがいい？</li>
                    <li>iDeCo、NISA、ふるさと納税の仕組み</li>
                    <li>節税の仕組みとやるべきこと</li>
                    <li>保険の選び方、入るべき保険と入らなくていい保険</li> -->
                    {!!$free_counsel_steps[2]['list']!!}
                </ul>
            </div>
        </div>
        <div class="step">
            <div class="step-title bottom-border">
                <!-- <p>Step 3 CashAcademyの紹介</p> -->
                {!!$free_counsel_steps[3]["title"]!!}
            </div>
            <div class="comment pc-display">
                <!-- <p>
                    お金を「何を、どのように」学習していけばいいのかをご説明します。また、CashAcademy
                </p>
                <p>がどのようにサポート可能なのかをお話しします。</p> -->
                {!!$free_counsel_steps[3]['pc-discription']!!}
            </div>
            <div class="comment sp-display" style="display: none">
                <!-- <p>お金を「何を、どのように」学習していけばいい</p>
                <p>のかをご説明します。また、CashAcademyがどの</p>
                <p>ようにサポート可能なのかをお話しします。</p> -->
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
        <!-- <p>無料カウンセリングの流れ</p> -->
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
                    <!-- <p>{{ $c }}</p> -->
                    @endif @if($key == "month")
                    <input name="month" value="{{ $c }}" type="hidden" />
                    <!-- <p>{{ $c }}</p> -->
                    @endif @if($key == "day")
                    <input name="day" value="{{ $c }}" type="hidden" />
                    <!-- <p>{{$c}}</p> -->
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
                    <!-- <p>{{ $c }}</p> -->
                    @endif @if($key == "month")
                    <input name="month" value="{{ $c }}" type="hidden" />
                    <!-- <p>{{ $c }}</p> -->
                    @endif @if($key == "day")
                    <input name="day" value="{{ $c }}" type="hidden" />
                    <!-- <p>{{$c}}</p> -->
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
                <!-- <p>漠然としたお金への<br />不安が消えた</p> -->
                {!!$review_field[1]["title"]!!}
            </div>
            <div class="sp-review-img-comment">
                <div class="img">
                    <img
                        src="{{ $review_field[1]['image']['url'] }}"
                        alt=""
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
                <p class="message">
                    <!-- 以前の私は「貯金は今のままでも足りるのか」「知らない間に損をしているとがあるかもしれない」といったお金への不安を抱えて居ました。 -->
                    {!!$review_field[1]["bc-class-discription"]!!}
                </p>
                <br />
                <p class="before-after">受講後</p>
                <br />
                <p class="message">
                    <!-- 貯金は「なぜ、どのぐらい必要なのか」を知ることができました。また、自分が気付いていなかった大きな支出や国がやっている優遇制度を知ることができました。漠然とした不安が消えただけでなく、自信を持てるようになりました。 -->
                     {!!$review_field[1]["af-class-discription"]!!}
                </p>
                <br />
            </div>
            <div class="comment pc-display">
                <p class="name">{!!$review_field[1]["name"]!!}</p>
                <br />
                <p class="age-profession">{!!$review_field[1]["profession"]!!}</p>
                <br />
                <p class="before-after">受講前</p>
                <br />
                <p class="message">
                    <!-- 以前の私は「貯金は今のままでも足りるのか」「知らない間に損をしているとがあるかもしれない」といったお金への不安を抱えて居ました。 -->
                    {!!$review_field[1]["bc-class-discription"]!!}
                </p>
                </p>
                <br />
                <p class="before-after">受講後</p>
                <br />
                <p class="message">
                    <!-- 貯金は「なぜ、どのぐらい必要なのか」を知ることができました。また、自分が気付いていなかった大きな支出や国がやっている優遇制度を知ることができました。漠然とした不安が消えただけでなく、自信を持てるようになりました。 -->
                    {!!$review_field[1]["af-class-discription"]!!}
                </p>
                </p>
                <br />
            </div>
        </div>
        <div class="review">
            <div class="title">
                <p>漠然としたお金への<br />不安が消えた</p>
            </div>
            <div class="sp-review-img-comment">
                <div class="img"><img src="/img/review.png" alt="" /></div>
                <div class="sp-comment sp-display" style="display: none">
                    <p class="name">H.Sさん</p>
                    <br />
                    <p class="age-profession">20代半ば<br />デザイナー</p>
                    <br />
                </div>
            </div>
            <div class="comment sp-display" style="display: none">
                <p class="before-after">受講前</p>
                <br />
                <p class="message">
                    以前の私は「貯金は今のままでも足りるのか」「知らない間に損をしているとがあるかもしれない」といったお金への不安を抱えて居ました。
                </p>
                <br />
                <p class="before-after">受講後</p>
                <br />
                <p class="message">
                    貯金は「なぜ、どのぐらい必要なのか」を知ることができました。また、自分が気付いていなかった大きな支出や国がやっている優遇制度を知ることができました。漠然とした不安が消えただけでなく、自信を持てるようになりました。
                </p>
                <br />
            </div>
            <div class="comment pc-display">
                <p class="name">H.Sさん</p>
                <br />
                <p class="age-profession">20代半ば<br />デザイナー</p>
                <br />
                <p class="before-after">受講前</p>
                <br />
                <p class="message">
                    以前の私は「貯金は今のままでも足りるのか」「知らない間に損をしているとがあるかもしれない」といったお金への不安を抱えて居ました。
                </p>
                <br />
                <p class="before-after">受講後</p>
                <br />
                <p class="message">
                    貯金は「なぜ、どのぐらい必要なのか」を知ることができました。また、自分が気付いていなかった大きな支出や国がやっている優遇制度を知ることができました。漠然とした不安が消えただけでなく、自信を持てるようになりました。
                </p>
                <br />
            </div>
        </div>
        <div class="review">
            <div class="title">
                <p>漠然としたお金への<br />不安が消えた</p>
            </div>
            <div class="sp-review-img-comment">
                <div class="img"><img src="/img/review.png" alt="" /></div>
                <div class="sp-comment sp-display" style="display: none">
                    <p class="name">H.Sさん</p>
                    <br />
                    <p class="age-profession">20代半ば<br />デザイナー</p>
                    <br />
                </div>
            </div>
            <div class="comment sp-display" style="display: none">
                <p class="before-after">受講前</p>
                <br />
                <p class="message">
                    以前の私は「貯金は今のままでも足りるのか」「知らない間に損をしているとがあるかもしれない」といったお金への不安を抱えて居ました。
                </p>
                <br />
                <p class="before-after">受講後</p>
                <br />
                <p class="message">
                    貯金は「なぜ、どのぐらい必要なのか」を知ることができました。また、自分が気付いていなかった大きな支出や国がやっている優遇制度を知ることができました。漠然とした不安が消えただけでなく、自信を持てるようになりました。
                </p>
                <br />
            </div>
            <div class="comment pc-display">
                <p class="name">H.Sさん</p>
                <br />
                <p class="age-profession">20代半ば<br />デザイナー</p>
                <br />
                <p class="before-after">受講前</p>
                <br />
                <p class="message">
                    以前の私は「貯金は今のままでも足りるのか」「知らない間に損をしているとがあるかもしれない」といったお金への不安を抱えて居ました。
                </p>
                <br />
                <p class="before-after">受講後</p>
                <br />
                <p class="message">
                    貯金は「なぜ、どのぐらい必要なのか」を知ることができました。また、自分が気付いていなかった大きな支出や国がやっている優遇制度を知ることができました。漠然とした不安が消えただけでなく、自信を持てるようになりました。
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
                <!-- <p>「お金の悩みがなくなった」「将来の</p>
                <p>不安が減った」「マンツーマンで丁寧</p>
                <p>に教えてもらった」「体系的でわかりや</p>
                <p>すかった」などの声をいただいておりま</p>
                <p>す。</p> -->
                {!!$questionnaire_field[1]["pc-discription"]!!}
            </div>
            <div class="research-day">
                <!-- <p>※2021年4月時点での自社調べ</p> -->
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
                <!-- <p>お金の勉強は早いほうが効果が出やす</p>
                <p>く、長期的視点で取り組んだほうがい</p>
                <p>いため、若い方がメインです。</p> -->
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
                <!-- <p>CashAcademyはこれから学び始める方</p>
                <p>でもカンタンに分かるように作られて</p>
                <p>いるため、挫折せず続けることができ</p>
                <p>ます。</p> -->
                 {!!$questionnaire_field[3]["pc-discription"]!!}
            </div>
            <div class="research-day">
                <!-- <p>※2021年4月時点での自社調べ</p> -->
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
                        >投資や金融の知識がゼロですが大丈夫でしょうか？ </span
                    >
                </p>
                <div class="sp-display questions-field" style="display: none">
                    <p class="question-mark">Q</p>
                    <div style="padding-top: 8%">
                        <p class="question">
                            投資や金融などの知識がゼロですが大丈
                        </p>
                        <p class="question">夫でしょうか？</p>
                    </div>
                </div>
                <div class="answer pc-display">
                    <!-- CashAcademyを受けた方の多くはお金の勉強については初心者です。初めて勉強する方でも理解できるようになっております -->
                    {!!$question_field[2]["pc-discription"]!!}
                <!-- <p class="answer pc-display">のでご安心ください。</p> -->
                </div>
                <div class="answer sp-display" style="display: none">
                    <!-- <p>CashAcademyを受けた方の多くはお金の勉強に</p>
                    <p>ついては初心者です。初めて勉強する方でも理</p>
                    <p>解できるようになっておりますのでご安心くだ</p>
                    <p>さい。</p> -->
                    {!!$question_field[2]["sp-discription"]!!}
                </div>
            </div>

            <div class="question-answer">
                <p class="pc-display">
                    <span class="question-mark">Q</span
                    ><span class="question"
                        >保険や投資商品等を売り込まれたりしませんか？</span
                    >
                </p>
                <div class="sp-display questions-field" style="display: none">
                    <p class="question-mark">Q</p>
                    <div style="padding-top: 8%">
                        <p class="question">保険や投資商品等を</p>
                        <p></p>
                        <p class="question">売り込まれたりしませんか？</p>
                    </div>
                </div>
                <div class="answer pc-display">
                    <!-- CashAcademyでは特定の金融機関からお金を頂いて紹介するようなことは一切しておりません。
                </div>
                <p class="answer pc-display">
                    お客様がお金の教養を身につけられることを第一優先としています。
                </p> -->
                {!!$question_field[3]["pc-discription"]!!}
                </div>
                <div class="answer sp-display" style="display: none">
                    <!-- <p>CashAcademyでは特定の金融機関からお金を頂</p>
                    <p>いて紹介するようなことは一切しておりませ</p>
                    <p>ん。</p>
                    <p>お客様がお金の教養を身につけられることを第</p>
                    <p>一優先としています。</p> -->
                    {!!$question_field[3]["sp-discription"]!!}
                </div>
            </div>

            <div class="question-answer">
                <p class="pc-display">
                    <span class="question-mark">Q</span
                    ><span class="question"
                        >カウンセリングでは何をしますか？</span
                    >
                </p>
                <div class="sp-display questions-field" style="display: none">
                    <p class="question-mark">Q</p>
                    <div style="padding-top: 8%">
                        <p class="question">カウンセリングでは</p>
                        <p></p>
                        <p class="question">何をしますか？</p>
                    </div>
                </div>
                <div class="answer pc-display">
                <!-- <p>
                    ①現状分析、②資産形成のポイント説明、③CashAcademyの紹介をします。
                </p>
                <p>
                    マンツーマンで、かつお客様に現状分析を元にお話しするので、多くのお客様に「受けてよかった」という声をいただいて
                </p> -->
                {!!$question_field[4]["pc-discription"]!!}
                </div>
                <p class="answer pc-display">おります。</p>
                <div class="answer sp-display" style="display: none">
                    <!-- <p>①現状分析、②資産形成のポイント説明、</p>
                    <p>③CashAcademyの紹介をします。</p>
                    <p>マンツーマンで、かつお客様に現状分析を元に</p>
                    <p>にお話しするので、多くのお客様に「受けてよ</p>
                    <p>かった」という声をいただいております。</p> -->
                    {!!$question_field[4]["sp-discription"]!!}
                </div>
            </div>

            <div class="question-answer">
                <p class="pc-display">
                    <span class="question-mark">Q</span
                    ><span class="question">カウンセリングは無料ですか？</span>
                </p>
                <div class="sp-display questions-field" style="display: none">
                    <p class="question-mark">Q</p>
                    <div style="padding-top: 8%">
                        <p class="question">カウンセリングは</p>
                        <p></p>
                        <p class="question">無料ですか？</p>
                    </div>
                </div>
                <div class="answer pc-display">
                    <!-- はい、無料です。ただし、無料カウンセリングはお1人様1回限りまでの受講とります。 -->
                    {!!$question_field[5]["pc-discription"]!!}
                </div>
                <div class="answer sp-display" style="display: none">
                    <!-- <p>はい、無料です。ただし、無料カウンセリング</p>
                    <p>はお1人様1回限りまでの受講とります。</p> -->
                    {!!$question_field[5]["sp-discription"]!!}
                </div>
            </div>

            <div class="question-answer">
                <p class="pc-display">
                    <span class="question-mark">Q</span
                    ><span class="question"
                        >地方にいるのですが受講可能ですか？</span
                    >
                </p>
                <div class="sp-display questions-field" style="display: none">
                    <p class="question-mark">Q</p>
                    <div style="padding-top: 8%">
                        <p class="question">地方にいるのですが</p>
                        <p></p>
                        <p class="question">受講可能ですか？</p>
                    </div>
                </div>
                <div class="answer pc-display">
                    <!-- 可能です。オンライン（zoom）で行うため、ネット環境と静かな場所があればどこでも受けることが可能です。 -->
                    {!!$question_field[6]["pc-discription"]!!}
                </div>
                <div class="answer sp-display" style="display: none">
                    <!-- <p>可能です。オンライン（zoom）で行うため、</p>
                    <p>ネット環境と静かな場所があればどこでも受け</p>
                    <p>ることが可能です。</p> -->
                    {!!$question_field[6]["sp-discription"]!!}
                </div>
            </div>
        </div>
    </div>
</div>
@component('components.footer') @endcomponent @endsection
