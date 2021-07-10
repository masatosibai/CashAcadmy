<header class="header">
    <div class="header-wrap">
        <h1 class="header-logo">Cash Academy</h1>
        <div class="change-logout-field">
            <div class="users-contacts-change">
                <form method="post" action="{{ route('admin.contacts') }}">
                    @csrf
                    <button type="submit" name="login">予約情報一覧</button>
                </form>
            </div>
            <div class="logout">
                <form method="POST" action="/admin/logout">
                    @csrf
                    <button type="submit">ログアウト</button>
                </form>
            </div>
        </div>
    </div>
</header>
