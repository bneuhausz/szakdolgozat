@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
    @include('partials.info-box')

    @foreach ($musclegroups as $musclegroup)
        @if (Config::get('app.locale') == 'hu')
            <p>
                <h1>{{ $musclegroup->name_hu }}</h1>
                <ul>
                    @foreach ($exercises as $exercise)
                        @if ($exercise->musclegroup_id == $musclegroup->id)
                            <li>{{ $exercise->name_hu }}</li>
                        @endif
                    @endforeach
                </ul>
            </p>
        @else
            <p>
                <h1>{{ $musclegroup->name_en }}</h1>
                <ul>
                    @foreach ($exercises as $exercise)
                        @if ($exercise->musclegroup_id == $musclegroup->id)
                            <li>{{ $exercise->name_en }}</li>
                        @endif
                    @endforeach
                </ul>
            </p>
        @endif
    @endforeach
@endsection
