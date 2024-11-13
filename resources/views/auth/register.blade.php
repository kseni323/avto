@extends('header')

@section('regi_content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аренда автомобилей</title>
    <link rel="stylesheet" href="css/app1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
</body>
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
            </ul>
        </div>
    </div>
</nav>

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="('Имя')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="('Пароль')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="('Повторите пароль')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ ('Вы уже зарегистрированы?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ ('Регистрация') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
</body>
@endsection