@extends('admin.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
	@if (Auth::check() && Auth::user()->id == 1 && $user->id != 1)
		@if($user->admin == true)
			<a href="{{ route('admin.loseAdmin', ['id' => $user->id]) }}" class="btn btn-danger">{{ trans('user.loseAdmin') }}</a>
		@else
			<a href="{{ route('admin.getAdmin', ['id' => $user->id]) }}" class="btn btn-primary">{{ trans('user.makeAdmin') }}</a>
		@endif
	@endif
    	<p>{{ $user->name }}</p>
@endsection
