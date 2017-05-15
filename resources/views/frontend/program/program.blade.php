@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <h2>
            {{ $program->name }}
        </h2>
        <p>
            <b>{{ trans('workoutPlans.type') }}:</b> {{ $program->type == "Strength" ? trans('workoutPlans.Strength') : trans('workoutPlans.Hypertrophy') }} <b>|
            {{ trans('workoutPlans.difficulty') }}:</b> {{ $program->difficulty == "Beginner" ? trans('workoutPlans.Beginner') : trans('workoutPlans.Advanced') }} <b>|
            {{ trans('workoutPlans.numOfDays') }}:</b> {{ $program->num_of_days }}
        </p>
        <p>
            <b>Program: </b><a href="{{ $program->link }}">{{ $program->link }}</a>
        </p>
    </div>
@endsection
