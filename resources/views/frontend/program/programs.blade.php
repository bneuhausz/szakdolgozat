@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/programs.css') }}">
@endsection

@section('content')
    <div id="searchBar" class="col-md-10 col-md-offset-1">
            <form class="form-inline">
                <div class="form-group">
                    <label for="numOfDays">{{ trans('workoutPlans.numOfDays') }}: </label>
                    <input type="number" name="numOfDays" class="form-control" id="numOfDays" min="1">
                </div>

                <div class="form-group">
                    <label for="type">{{ trans('workoutPlans.type') }}: </label>
                    <select id="type" name="type" class="form-control">
                        <option value="All">{{ trans('workoutPlans.all') }}</option>
                        <option value="Strength">{{ trans('workoutPlans.Strength') }}</option>
                        <option value="Hypertrophy">{{ trans('workoutPlans.Hypertrophy') }}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="radio-inline"><input type="radio" id="All" value="All" name="difficulty" checked>{{ trans('workoutPlans.all') }}</label>
                    <label class="radio-inline"><input type="radio" id="Beginner" value="Beginner" name="difficulty">{{ trans('workoutPlans.Beginner') }}</label>
                    <label class="radio-inline"><input type="radio" id="Advanced" value="Advanced" name="difficulty">{{ trans('workoutPlans.Advanced') }}</label>
                </div>

                <input type="hidden" id = "token" name="_token" value="{{ Session::token() }}">

                <a class="btn btn-primary btn-sm" href="#" id="searchButton">{{ trans('general.search') }}</a>
            </form>

            <hr>
    </div>

    <div id="programBox" class="col-md-4 col-md-offset-4">
        @include('frontend.program.partials.programList')
    </div>
@endsection

@section('scripts')
    <script src="{{ URL::to('js/program.js') }}"></script>
@endsection
