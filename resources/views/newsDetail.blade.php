@extends('layouts.app')

@section('title', 'Tin tức | ' . $content->title)

@section('description', $content->description)

@section('content')
    @include('components.newsDetail')
@endsection
