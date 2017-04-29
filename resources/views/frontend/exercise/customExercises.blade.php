@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
    @include('partials.info-box')

    @forelse ($exercises as $exercise)
        asd
    @empty
        empty
    @endforelse
@endsection
