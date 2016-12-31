@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
	<p>{{ $user->name }}</p>

	<a href="{{ route('picture.upload') }}" class="btn btn-primary">{{ trans('user.uploadPicture') }}</a>
@endsection