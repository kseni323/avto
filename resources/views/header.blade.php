<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>driveGo</title>
    <link rel="icon" href="{{asset ('images/ава.jpg')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/a4b8bdf2119927647b8e8f0f8/a1f403e3da1fb14c1ea674d4b.js");</script>
     <style>
        .nav-link:hover {
            color: #04DBC0 !important;
        }
        
         .drive-text:hover {
              color: #04DBC0 !important; 
              }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-lignt">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="drive-text">drive</span><span style="color:#04DBC0">Go</span>&nbsp;
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNavbar" aria-controls="mobileNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>      
        <div class="collapse navbar-collapse" id="mobileNavbar">
            <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Главная</a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{ url('/#services') }}">Услуги</a>
     </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('cars.index') }}">Автомобили</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/#reserve') }}">Бронирование</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="{{ url('/#contact-us') }}">Контакты</a>
    </li>
    @auth
        <li class="nav-item">
            <a href="{{ route('profile.edit') }}" class="nav-link ">Профиль</a>
        </li>
        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="nav-link">Выйти</button>
            </form>
        </li>
    @else
        <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">Вход</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">Регистрация</a>
            </li>
        @endif
    @endauth
</ul>
            </ul>
        </div>
    </div>
</nav>

@yield('main_content')

@yield('avto_content')

@yield('show_content')

@yield('regi_content')

</body>
</html>