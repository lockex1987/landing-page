@extends('layouts.app')

@section('title', 'Landing')

@section('description', 'Trang chủ')

@section('content')
    @include('components.jumbotron')
    @include('components.services')
    @include('components.about')
    {{-- @include('components.portfolio') --}}
    {{-- @include('components.testimonials') --}}
    {{-- @include('components.clients') --}}
    @include('components.contact')
@endsection
