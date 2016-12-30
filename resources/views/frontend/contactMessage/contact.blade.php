@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
    @include('partials.info-box')

    <form action="{{ route('contact.send') }}" method="post" class="form-horizontal">
      <fieldset>
        <legend>
            {{ trans('email.contact') }}
        </legend>

        <div class="form-group">
          <label for="name" class="col-lg-2 control-label">{{ trans('user.name') }}</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="name" id="name" value="{{ Request::old('name') }}">
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-lg-2 control-label">{{ trans('user.email') }}</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="email" id="email" value="{{ Request::old('email') }}">
          </div>
        </div>

        <div class="form-group">
          <label for="subject" class="col-lg-2 control-label">{{ trans('email.subject') }}</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="subject" id="subject" value="{{ Request::old('subject') }}">
          </div>
        </div>

        <div class="form-group">
          <label for="message" class="col-lg-2 control-label">{{ trans('email.message') }}</label>
          <div class="col-lg-10">
            <textarea class="form-control" rows="10" name="message" id="message">{{ Request::old('message') }}</textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">{{ trans('general.submit') }}</button>
          </div>
        </div>

        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </fieldset>
    </form>
@endsection
