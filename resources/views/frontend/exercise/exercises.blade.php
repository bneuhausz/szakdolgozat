@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
    @include('partials.info-box')

    <div class="col-md-4 col-md-offset-4">
        @foreach ($musclegroups as $musclegroup)
            @if (Config::get('app.locale') == 'hu')
                <p>
                    <h4>{{ $musclegroup->name_hu }}</h4>
                    <ul>
                        @foreach ($exercises as $exercise)
                            @if ($exercise->musclegroup_id == $musclegroup->id)
                                <li><a href="{{ route('exercise', ['exerciseID' => $exercise->id]) }}">{{ $exercise->name_hu }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </p>
            @else
                <p>
                    <h4>{{ $musclegroup->name_en }}</h4>
                    <ul>
                        @foreach ($exercises as $exercise)
                            @if ($exercise->musclegroup_id == $musclegroup->id)
                                <li><a href="{{ route('exercise', ['exerciseID' => $exercise->id]) }}">{{ $exercise->name_en }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </p>
            @endif
        @endforeach
    </div>
@endsection
