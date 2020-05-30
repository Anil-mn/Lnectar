@extends('layouts.app')
@section('content')
    @include('incu.slider')
    @include('incu.about')
    {{-- @include('incu.web') --}}
    @include('incu.paper')
    @include('incu.count')
    @include('incu.news')
    @include('incu.message')


@endsection