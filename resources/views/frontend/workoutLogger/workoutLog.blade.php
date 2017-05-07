@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('styles')
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.1.118/styles/kendo.common.min.css">
@endsection

@section('content')
    <div class="col-md-1" style="float:left">
        <form class="" action="{{ route('workout.add') }}" method="get">
            <input id="datePicker" name="date" />
            <input type="hidden" id="id" name="id" value="3">
            <input type="hidden" id="weights" name="weights" value="10,10">
            <input type="hidden" id="reps" name="reps" value="12,12">
            <input type="hidden" id="token" name="_token" value="{{ Session::token() }}">
            <!--<a style="float:right;" class="btn btn-primary btn-sm" href="{{ route('workout.add') }}" id="addButton">{{ trans('exercise.addExercise') }}</a>-->
            <button type="submit" name="button">teszt</button>
            @if (isset($workout))
                {{ $workout->exercises }}
            @endif
        </form>
    </div>
    <div class="col-md-12">

    </div>
@endsection

@section('scripts')
    <script src="http://kendo.cdn.telerik.com/2017.1.118/js/kendo.ui.core.min.js"></script>
    <script src="{{ URL::to('js/workoutLogger.js') }}"></script>
@endsection
