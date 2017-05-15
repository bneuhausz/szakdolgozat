@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('styles')
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.1.118/styles/kendo.common.min.css">
    <link rel="stylesheet" href="{{ URL::to('css/modal.css') }}">
@endsection

@section('content')
    <div id="pageContainer">
        <div class="col-md-3 topMargin">
            <div class="form-group">
                <input id="datePicker" name="date" value="{{ $date }}"/>
            </div>
        </div>

        <div class="col-md-3 topMargin">
            <form class="form-horizontal">
                <div class="form-group">
                    <select class="" name="muscleGroupSelect" id="muscleGroupSelect">
                        @if (Config::get('app.locale') == 'hu')
                            <option value="0">{{ trans('workoutPlans.pleaseChoose') }}</option>
                            @foreach ($muscleGroups as $muscleGroup)
                                <option value="{{ $muscleGroup->id }}">{{ $muscleGroup->name_hu }}</option>
                            @endforeach
                        @else
                            <option value="0">{{ trans('workoutPlans.pleaseChoose') }}</option>
                            @foreach ($muscleGroups as $muscleGroup)
                                <option value="{{ $muscleGroup->id }}">{{ $muscleGroup->name_en }}</option>
                            @endforeach
                        @endif
                    </select>

                    <div id="exerciseSelects" class="hidden">
                        @include('frontend.partials.exerciseSelects')
                    </div>
                </div>

                <input type="hidden" id="token" name="_token" value="{{ Session::token() }}">
            </form>
        </div>

        <div class="col-md-6" id="workoutSets">
            @if (count($loggedExercises) > 0)
                @include('frontend.partials.workoutSets')
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script src="http://kendo.cdn.telerik.com/2017.1.118/js/kendo.ui.core.min.js"></script>
    <script type="text/javascript">
        var token = "{{ Session::token() }}";
    </script>
    <script src="{{ URL::to('js/workoutLogger.js') }}"></script>
@endsection
