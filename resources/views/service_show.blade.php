@extends('header')

@section('content')
<div class="container mt-5">
    <div class="service-details">
        <h1>{{ $service->title }}</h1>
        <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" style="width: 100%; max-height: 400px;">
        <p>{{ $service->description }}</p>
    </div>
</div>
@endsection