@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/list.css') }}">
@endsection

@section('content')
    <div class="col-md-8 col-md-offset-2">
        @if (Config::get('app.locale') == 'hu')
            <h2>
                {{ $exercise->name_hu }}
            </h2>
            <p>
                <b>{{ trans('exercise.musclegroup') }}:</b> {{ $exercise->muscleGroup->name_hu }} <b>| {{ trans('exercise.exerciseType') }}:</b> {{ $exercise->exerciseType->name_hu }}
            </p>
            <p>
                <iframe width="560" height="315" src="{{ $exercise->video }}" frameborder="0" allowfullscreen></iframe>
            </p>
            <p>
                <b>{{ trans('exercise.description') }}:</b> {{ $exercise->description_hu }}
            </p>
        @else
          <h2>
              {{ $exercise->name_en }}
          </h2>
          <p>
              <b>{{ trans('exercise.musclegroup') }}:</b> {{ $exercise->muscleGroup->name_en }} <b>| {{ trans('exercise.exerciseType') }}:</b> {{ $exercise->exerciseType->name_en }}
          </p>
          <p>
              <iframe width="560" height="315" src="{{ $exercise->video }}" frameborder="0" allowfullscreen></iframe>
          </p>
          <p>
              <b>{{ trans('exercise.description') }}:</b> {{ $exercise->description_en }}
          </p>
        @endif
    </div>
@endsection
