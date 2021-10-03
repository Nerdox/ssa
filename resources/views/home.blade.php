@extends('layouts.app')

@section('header')
        
    @include('home.header')

@endsection

@section('content')

    @include('home.acturial')
    @include('home.study')
    @include('home.news')
    @include('home.career')
    @include('home.partners')

@endsection

@section('footer')
    
    @include('home.footer')

@endsection