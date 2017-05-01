@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
    @include('partials.info-box')

    <form action="{{ route('profile.update') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
      <fieldset>
        <legend>
            {{ $user->name }}
        </legend>

        <div class="form-group">
          <label for="email" class="col-lg-2 control-label">{{ trans('user.email') }}</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="email" id="email" placeholder="{{ trans('email.confirmationWillBeSent') }}">
          </div>
        </div>

        <div class="form-group">
          <label for="height" class="col-lg-2 control-label">{{ trans('user.height') }}(cm)</label>
          <div class="col-lg-10">
            <input type="number" class="form-control" name="height" id="height" value="{{ $user->height }}">
          </div>
        </div>

        <div class="form-group">
          <label for="weight" class="col-lg-2 control-label">{{ trans('user.weight') }}(kg)</label>
          <div class="col-lg-10">
            <input type="number" class="form-control" name="weight" id="weight" value="{{ $user->weight }}">
          </div>
        </div>

        <div class="form-group">
          <label for="bench" class="col-lg-2 control-label">{{ trans('user.benchPress') }}(kg)</label>
          <div class="col-lg-10">
            <input type="number" class="form-control" name="bench" id="bench" value="{{ $user->bench_1rm }}">
          </div>
        </div>

        <div class="form-group">
          <label for="squat" class="col-lg-2 control-label">{{ trans('user.squat') }}(kg)</label>
          <div class="col-lg-10">
            <input type="number" class="form-control" name="squat" id="squat" value="{{ $user->squat_1rm }}">
          </div>
        </div>

        <div class="form-group">
          <label for="deadlift" class="col-lg-2 control-label">{{ trans('user.deadlift') }}(kg)</label>
          <div class="col-lg-10">
            <input type="number" class="form-control" name="deadlift" id="deadlift" value="{{ $user->deadlift_1rm }}">
          </div>
        </div>

        <div class="form-group">
          <label for="ohp" class="col-lg-2 control-label">{{ trans('user.ohp') }}(kg)</label>
          <div class="col-lg-10">
            <input type="number" class="form-control" name="ohp" id="ohp" value="{{ $user->ohp_1rm }}">
          </div>
        </div>

        <div class="form-group">
            <label for="image" class="col-lg-2 control-label">{{ trans('user.image') }} (.jpg, .jpeg, .png)</label>
            <div class="col-lg-10">
                <input type="file" name="image" class="form-control" id="image">
            </div>
        </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-danger">{{ trans('general.clear') }}</button>
            <button type="submit" class="btn btn-primary">{{ trans('user.editProfile') }}</button>
          </div>
        </div>

        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </fieldset>
    </form>
@endsection
