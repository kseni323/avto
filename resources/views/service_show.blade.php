@extends('header')

@section('content')
<div class="container mt-5">
    <div class="card">
        <img src="{{ asset($service->image) }}" class="card-img-top" alt="{{ $service->title }}">
        <div class="card-body">
            <h1 class="card-title">{{ $service->title }}</h1>
            <p class="card-text">{{ $service->description }}</p>
            <a href="{{ route('services.index') }}" class="btn btn-primary">Вернуться к услугам</a>
        </div>
    </div>
</div>
@endsection