@extends('admin.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
    @include('partials.info-box')
    
    <form action="{{ route('admin.exercise.add') }}" method="post" class="form-horizontal">
      <fieldset>
        <legend>
            {{ trans('exercise.addExercise') }}
        </legend>

        <div class="form-group">
          <label for="name_hu" class="col-lg-2 control-label">{{ trans('exercise.name_hu') }}</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="name_hu" id="name_hu" placeholder="{{ trans('exercise.name_hu') }}">
          </div>
        </div>

        <div class="form-group">
          <label for="name_en" class="col-lg-2 control-label">{{ trans('exercise.name_en') }}</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="name_en" id="name_en" placeholder="{{ trans('exercise.name_en') }}">
          </div>
        </div>

        <div class="form-group">
          <label for="description_hu" class="col-lg-2 control-label">{{ trans('exercise.description_hu') }}</label>
          <div class="col-lg-10">
            <textarea class="form-control" rows="3" name="description_hu" id="description_hu" placeholder="{{ trans('exercise.description_hu') }}"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="description_en" class="col-lg-2 control-label">{{ trans('exercise.description_en') }}</label>
          <div class="col-lg-10">
            <textarea class="form-control" rows="3" name="description_en" id="description_en" placeholder="{{ trans('exercise.description_en') }}"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="musclegroup" class="col-lg-2 control-label">{{ trans('exercise.musclegroup') }}</label>
          <div class="col-lg-10">
            <select class="form-control" name="musclegroup" id="musclegroup">
                @foreach ($musclegroups as $musclegroup)
                    @if (Config::get('app.locale') == 'hu')
                        <option>{{ $musclegroup->name_hu }}</option>
                    @elseif (Config::get('app.locale') == 'en')
                        <option>{{ $musclegroup->name_en }}</option>
                    @endif
                @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="exerciseType" class="col-lg-2 control-label">{{ trans('exercise.exerciseType') }}</label>
          <div class="col-lg-10">
            <select class="form-control" name="exerciseType" id="exerciseType">
                @foreach ($exerciseTypes as $exerciseType)
                    @if (Config::get('app.locale') == 'hu')
                        <option>{{ $exerciseType->name_hu }}</option>
                    @elseif (Config::get('app.locale') == 'en')
                        <option>{{ $exerciseType->name_en }}</option>
                    @endif
                @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="video" class="col-lg-2 control-label">{{ trans('exercise.videoLink') }}</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="video" id="video" palceholder="link">
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-danger">{{ trans('general.cancel') }}</button>
            <button type="submit" class="btn btn-primary">{{ trans('exercise.addExercise') }}</button>
          </div>
        </div>

        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </fieldset>
    </form>
@endsection
