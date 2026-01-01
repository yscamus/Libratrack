@extends('layouts.booksaw')

@section('title', 'Home')

@section('content')
    @include('partials.header')
    @include('partials.billboard')
    @include('partials.clients')
    @include('partials.featured-books')
    @include('partials.best-selling')
    @include('partials.popular-books')
    @include('partials.quotation')
    @include('partials.subscribe')
    @include('partials.download-app')
    @include('partials.footer')
@endsection

