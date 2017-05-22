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
            <h1>{{ trans('calculator.1rm') }}</h1>
            <form id="1rm-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="weight">{{ trans('calculator.weight') }}</label>
                            <input type="number" class="form-control" name="weight" id="weight" placeholder="kg">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="rep">{{ trans('calculator.rep') }}</label>
                            <select class="form-control" name="rep" id="rep">
                                @for ($i=1; $i<12; $i++)
                                    <option>{{ $i+1 }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="1rm">{{ trans('calculator.1rm') }}</label>
                            <input type="number" disabled class="form-control" name="1rm" id="1rm" placeholder="kg">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ URL::to('js/calculator.js') }}"></script>
@endsection
