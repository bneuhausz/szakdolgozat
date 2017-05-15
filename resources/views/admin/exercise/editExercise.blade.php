@extends('admin.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
    <form action="{{ route('admin.exercise.update') }}" method="post" class="form-horizontal">
      <fieldset>
        <legend>
            @if (Config::get('app.locale') == 'hu')
                <h1>
                    {{ $exercise->name_hu }}
                </h1>
            @elseif (Config::get('app.locale') == 'en')
                <h1>
                    {{ $exercise->name_en }}
                </h1>
            @endif
        </legend>

        <div class="form-group">
          <label for="name_hu" class="col-lg-2 control-label">{{ trans('exercise.name_hu') }}</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="name_hu" id="name_hu" value="{{ $exercise->name_hu }}">
          </div>
        </div>

        <div class="form-group">
          <label for="name_en" class="col-lg-2 control-label">{{ trans('exercise.name_en') }}</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="name_en" id="name_en" value="{{ $exercise->name_en }}">
          </div>
        </div>

        <div class="form-group">
          <label for="description_hu" class="col-lg-2 control-label">{{ trans('exercise.description_hu') }}</label>
          <div class="col-lg-10">
            <textarea class="form-control" rows="3" name="description_hu" id="description_hu">{{ $exercise->description_hu }}</textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="description_en" class="col-lg-2 control-label">{{ trans('exercise.description_en') }}</label>
          <div class="col-lg-10">
            <textarea class="form-control" rows="3" name="description_en" id="description_en">{{ $exercise->description_en }}</textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="musclegroup" class="col-lg-2 control-label">{{ trans('exercise.musclegroup') }}</label>
          <div class="col-lg-10">
            <select class="form-control" name="musclegroup" id="musclegroup">
                @foreach ($musclegroups as $musclegroup)
                    @if (Config::get('app.locale') == 'hu')
                        <option {{ $exercise->musclegroup_id == $musclegroup->id ? 'selected' : ''}}>{{ $musclegroup->name_hu }}</option>
                    @elseif (Config::get('app.locale') == 'en')
                        <option {{ $exercise->musclegroup_id == $musclegroup->id ? 'selected' : ''}}>{{ $musclegroup->name_en }}</option>
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
                        <option {{ $exercise->exercisetype_id == $exerciseType->id ? 'selected' : ''}}>{{ $exerciseType->name_hu }}</option>
                    @elseif (Config::get('app.locale') == 'en')
                        <option {{ $exercise->exercisetype_id == $exerciseType->id ? 'selected' : ''}}>{{ $exerciseType->name_en }}</option>
                    @endif
                @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="video" class="col-lg-2 control-label">{{ trans('exercise.videoLink') }}</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="video" id="video" value="{{ $exercise->video }}">
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-danger">{{ trans('general.cancel') }}</button>
            <button type="submit" class="btn btn-primary">{{ trans('exercise.editExercise') }}</button>
          </div>
        </div>

        <input type="hidden" name="id" value="{{ $exercise->id }}">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </fieldset>
    </form>
@endsection
