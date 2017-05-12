@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('styles')
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.1.118/styles/kendo.common.min.css">
    <link rel="stylesheet" href="{{ URL::to('css/modal.css') }}">
@endsection

@section('content')
    <div class="col-md-3" style="margin-top:32px;">
        <form class="form-horizontal" action="{{ route('workout.add') }}" method="get">
            <div class="form-group">
                <select class="" name="" style="width:100%">
                    <option value="">Benchasdasdasdasdasdasdsadasd</option>
                    <option value="">Deadlift</option>
                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-sm center">Add Exercise</button>
            </div>

            <!-- dev.bneuhausz.com admin/index card+css -->
            <input type="hidden" id="id" name="id" value="3">
            <input type="hidden" id="weights" name="weights" value="10,10">
            <input type="hidden" id="reps" name="reps" value="12,12">
            <input type="hidden" id="token" name="_token" value="{{ Session::token() }}">
        </form>
    </div>

    <div class="col-md-6">
        @include('frontend.partials.workoutSets')
    </div>

    <div class="col-md-3" style="margin-top:32px;">
        <div class="form-group">
            <input id="datePicker" name="date" style="width:100%;padding-left:25px;"/>
        </div>
    </div>

    <div class="modal" id="workoutInfo">

    </div>
@endsection

@section('scripts')
    <script src="http://kendo.cdn.telerik.com/2017.1.118/js/kendo.ui.core.min.js"></script>
    <script type="text/javascript">
        var token = "{{ Session::token() }}";
    </script>
    <script src="{{ URL::to('js/workoutLogger.js') }}"></script>
@endsection
