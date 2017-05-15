@extends('admin.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/list.css') }}">
@endsection

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>
            {{ trans('general.exercises') }}
        </h1>

        <div id="searchBox">
            <form action="{{ route('admin.exercise.search') }}" method="post">
                <div class="input-group">
                    <label for="name">{{ trans('general.exercise') }}</label>
                    <input type="text" name="name">
                    <button type="submit" class="btn btn-default btn-xs">{{ trans('general.search' ) }}</button>
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>

        <div id="list">
            <ul>
                @foreach ($exercises as $exercise)
                    <li>
                        @if (Config::get('app.locale') == 'hu')
                            <p>
                                {{ $exercise->name_hu }} <span class="delete">
                                    <a href="{{ route('admin.exercise.edit', ['id' => $exercise['id']]) }}" class="btn btn-primary btn-xs">{{ trans('general.edit') }}</a>
                                    <a href="{{ route('admin.exercise.delete', ['id' => $exercise['id']]) }}" class="btn btn-danger btn-xs">{{ trans('general.delete') }}</a>
                                </span>
                            </p>
                        @elseif (Config::get('app.locale') == 'en')
                            <p>
                                {{ $exercise->name_en }} <span class="delete">
                                    <a href="{{ route('admin.exercise.edit', ['id' => $exercise['id']]) }}" class="btn btn-primary btn-xs">{{ trans('general.edit') }}</a>
                                    <a href="{{ route('admin.exercise.delete', ['id' => $exercise['id']]) }}" class="btn btn-danger btn-xs">{{ trans('general.delete') }}</a>
                                </span>
                            </p>
                        @endif
                    </li>
                @endforeach
            </ul>

            @if ($exercises->lastPage() > 1)
                <section class="pagination">
                    <span class="pagination">
                        @if ($exercises->currentPage() !== 1)
                            <a href="{{ $exercises->previousPageUrl() }}">{{ trans('general.previousPage') }}</a>
                        @endif

                        @if ($exercises->currentPage() !== $exercises->lastPage())
                            <a href="{{ $exercises->nextPageUrl() }}">{{ trans('general.nextPage') }}</a>
                        @endif
                    </span>
                </section>
            @endif
        </div>
    </div>
@endsection
