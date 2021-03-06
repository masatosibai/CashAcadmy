<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/comfirm.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/adminContact.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/adminUser.css') }}" />
    </head>
    <body>
        @yield('content')
        <script src="{{ asset('js/modal.js') }}"></script>
        <script src="{{ asset('js/calendarChange.js') }}"></script>
    </body>
</html>
