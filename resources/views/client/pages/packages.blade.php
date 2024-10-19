@extends('client.layouts.app')
@push('styles')
<!-- -- -->
@endpush

@section('title',$package->title)

@section('content')
<div class="package-detail">
    <h2>{{ $package->title }}</h2>
    <p>Author: {{ $package->author->name }}</p>
    <p>Description: {{ $package->description }}</p>
    <p>Rating: {{ $package->rating }}</p>
    <p>Questions Count: {{ $package->question_count }}</p>
    <p>Participants: {{ $package->attempt_count }}</p>
    <img src="{{ asset('img/img_bg_pq/' . $package->images) }}" alt="{{ $package->title }}">
    <!-- Bạn có thể thêm nhiều thông tin khác ở đây -->
</div>
@endsection