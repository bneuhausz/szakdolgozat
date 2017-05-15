@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
    @include('partials.info-box')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <input type="text" id ="exerciseName" name="exerciseName" placeholder="exercise">

            <select name="exerciseType" id="exerciseType">
                @foreach ($exercisetypes as $exerciseType)
                    @if (Config::get('app.locale') == 'hu')
                        <option>{{ $exerciseType->name_hu }}</option>
                    @elseif (Config::get('app.locale') == 'en')
                        <option>{{ $exerciseType->name_en }}</option>
                    @endif
                @endforeach
            </select>

            <select name="musclegroup" id="musclegroup">
                @foreach ($musclegroups as $musclegroup)
                    @if (Config::get('app.locale') == 'hu')
                        <option>{{ $musclegroup->name_hu }}</option>
                    @elseif (Config::get('app.locale') == 'en')
                        <option>{{ $musclegroup->name_en }}</option>
                    @endif
                @endforeach
            </select>

            <input type="hidden" id = "token" name="_token" value="{{ Session::token() }}">

            <a class="btn btn-primary btn-sm" href="#" id="addButton">{{ trans('exercise.addExercise') }}</a>
        </div>
    </div>

    <hr>

    <div class="col-md-4 col-md-offset-4">
        @forelse ($musclegroups as $musclegroup)
            @if (Config::get('app.locale') == 'hu')
                <p>
                    <ul style="list-style:none;">
                        @foreach ($exercises as $exercise)
                            @if ($exercise->musclegroup_id == $musclegroup->id)
                                <li id="{{ $exercise->id }}"><b>{{ $exercise->name }}</b> | {{ $exercise->exerciseType->name_hu }} | {{ $exercise->muscleGroup->name_hu }} <a href="#" class="btn btn-danger btn-xs cstExerciseDeleteBtn">delete</a></li>
                            @endif
                        @endforeach
                    </ul>
                </p>
            @else
                <p>
                    <ul style="list-style:none;">
                        @foreach ($exercises as $exercise)
                            @if ($exercise->musclegroup_id == $musclegroup->id)
                                <li id="{{ $exercise->id }}"><b>{{ $exercise->name }}</b> | {{ $exercise->exerciseType->name_en }} | {{ $exercise->muscleGroup->name_en }} <a href="#" class="btn btn-danger btn-xs cstExerciseDeleteBtn">delete</a></li>
                            @endif
                        @endforeach
                    </ul>
                </p>
            @endif
        @empty
            <p>{{ trans('exercise.noCustomExercises') }}</p>
        @endforelse
    </div>
@endsection

@section('scripts')
    <script src="{{ URL::to('js/customExercise.js') }}"></script>
@endsection
