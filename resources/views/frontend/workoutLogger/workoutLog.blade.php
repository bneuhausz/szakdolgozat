@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('styles')
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.1.118/styles/kendo.common.min.css">
@endsection

@section('content')
    <div class="col-md-1" style="float:left">
        <input id="datePicker" />
    </div>
    <div class="col-md-12">
        <input type="hidden" id = "token" name="_token" value="{{ Session::token() }}">
        <a style="float:right;" class="btn btn-primary btn-sm" href="{{ route('workout.add') }}" id="addButton">{{ trans('exercise.addExercise') }}</a>
    </div>
@endsection

@section('scripts')
    <script src="http://kendo.cdn.telerik.com/2017.1.118/js/kendo.ui.core.min.js"></script>
    <script src="{{ URL::to('js/workoutLogger.js') }}"></script>
@endsection
