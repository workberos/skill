<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Event Backend</title>

    <base href="../">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Custom styles -->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="events/index.html">Nền tảng sự kiện</a>
    <span class="navbar-organizer w-100">{{ session('organizer')->name }}</span>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" id="logout" href="{{ route('logout') }}">Đăng xuất</a>
        </li>
    </ul>
</nav>

@yield('content')
</body>
</html>