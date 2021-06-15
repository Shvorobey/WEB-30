<!DOCTYPE html>
<html lang="en">

<head>
@include('preloader')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog-home.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container" style="background-color:blue">
        <a class="navbar-brand" href="{{route('index')}}" style="color:red">WEB-30 BLOG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" style="color:gold">
                <li class="nav-item active" >
                    <a class="nav-link" href="{{route('index')}}" style="color:gold">Домой
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}"style="color:gold">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services')}}"style="color:gold">Наши сервисы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contacts')}}"style="color:gold">Наши контакты</a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_post_get')}}"style="color:gold">Администрирование</a>
                    </li>
                    @endif
                <li class="nav-item">
                    <a class="nav-link" style="color: white"
                       href="{{route('login')}}">@if(\Illuminate\Support\Facades\Auth::check()){{\Illuminate\Support\Facades\Auth::user()->name}}
                    @else Вход @endif</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

@yield('content')
@yield('sidebar')



    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">

    <div class="container">
        <p class="m-0 text-center text-white">Подпишись на нашу новостную рассылку</p>
        <form class="m-0 text-center text-white" method="post" action="{{route('subscribed')}}">
            @csrf
            <input type="email" name="mail">
            <input type="submit" value="Подписаться">
        </form>
        <p class="m-0 text-center text-white">Copyright &copy; Shvorobey 2021</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
