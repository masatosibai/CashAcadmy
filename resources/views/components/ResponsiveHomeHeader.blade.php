<header id="responsive-home-header">
    <div class="responsive-home-header-wrap">
        <h1 class="responsive-home-header-logo">Cash Academy</h1>
        <div id="responsive-home-hamburger">
            <!-- <form method="post" action="{{ route('home.index') }}"> -->
            @csrf
            <button type="submit" name="hanberMune" value="on">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- </form> -->
        </div>
    </div>
</header>
