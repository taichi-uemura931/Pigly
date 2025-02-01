<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/common1.css')}}">
    @yield('css')
    <title>Pigly</title>
</head>

<body>
    <div class="header">
        <h2 class="header_title">PiGly</h2>
        <div class="header_button">
            <form action="/weight_logs/goal_setting" method="post">
                @csrf
                <input class="header__link__setting" type="submit" value="目標体重設定">
            </form>
            <form action="/logout" method="post">
                @csrf
                <input class="header__link__logout" type="submit" value="ログアウト">
            </form>
        </div>
    </div>
    @yeild('content')
</body>

</html>