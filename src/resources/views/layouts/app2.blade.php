<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/common2.css')}}">
    @yield('css')
    <title>Pigly</title>
</head>

<body>
    <div class="app">
        <header class="title">
            <h1 class="title__heading">Pigly</h1>
            @yield('title')
        </header>
        <div class="content">
            @yeild('content')
        </div>
        @yeild('link')
    </div>
</body>

</html>