@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/calorieneed.css') }}">
@endsection

@section('content')
    @include('partials.info-box')

    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>{{ trans('calculator.calorieNeed') }}</h1>
            <div class="" id="output">

            </div>
            <form action="{{ route('calculate.calorieneed') }}" method="post" id="calorieneed-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="age">{{ trans('calculator.age') }}</label>
                            <input type="number" class="form-control" name="age" id="age" value="{{ Request::old('age') }}" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="gender">{{ trans('calculator.gender') }}</label>
                            <select class="form-control" name="gender" id="gender" value="{{ Request::old('gender') }}">
                                <option>{{ trans('calculator.male') }}</option>
                                <option>{{ trans('calculator.female') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="height">{{ trans('calculator.height') }}</label>
                            <input type="number" class="form-control" name="height" id="height" placeholder="cm" value="{{ Request::old('height') }}" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="weight">{{ trans('calculator.weight') }}</label>
                            <input type="number" class="form-control" name="weight" id="weight" placeholder="kg" value="{{ Request::old('weight') }}" required>
                        </div>
                    </div>
                </div>
                @if (Auth::check())
                    <div class="checkbox pull-left">
                        <label>
                            <input type="checkbox" id="save"> {{ trans('calculator.saveBMR') }}
                        </label>
                    </div>
                @endif
                <input type="hidden" id = "token" name="_token" value="{{ Session::token() }}">
                <button type="submit" class="btn btn-primary center">{{ trans('general.submit') }}</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ URL::to('js/calculator.js') }}"></script>
@endsection
