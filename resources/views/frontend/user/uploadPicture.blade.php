@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
	@if (isset($filename))
        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <img src="{{ route('profile.image', ['filename' => $filename]) }}" alt="" class="img-responsive">
            </div>
        </section>
    @endif

    <hr>

	<section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>{{ $user->name }}</h3></header>
            <form action="{{ route('picture.upload') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image">Image (only .jpg)</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Save Account</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>   
@endsection