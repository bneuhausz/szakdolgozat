@extends('admin.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/list.css') }}">
@endsection

@section('content')
    @include('partials.info-box')

    <div class="col-md-6 col-md-offset-3">
        <h1>
            {{ trans('header.userList') }}
        </h1>

        <div id="searchBox">
            <form action="{{ route('admin.user.search') }}" method="post">
                <div class="input-group">
                    <label for="name">{{ trans('user.name') }}</label>
                    <input type="text" name="name">
                    <button type="submit" class="btn btn-default btn-xs">{{ trans('general.search' ) }}</button>
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>

        <div id="list">
            <ul>
                @foreach ($users as $user)
                    <li>
                        <p>
                            <a href="{{ route('admin.user', ['userId' => $user->id]) }}">{{ $user->name }}</a>
                            <span class="delete">
                                <a href="{{ route('admin.user', ['userId' => $user->id]) }}" class="btn btn-primary btn-xs">{{ trans('user.profile') }}</a>
                            </span>
                        </p>
                    </li>
                @endforeach
            </ul>

            @if ($users->lastPage() > 1)
                <section class="pagination">
                    <span class="pagination">
                        @if ($users->currentPage() !== 1)
                            <a href="{{ $users->previousPageUrl() }}">{{ trans('general.previousPage') }}</a>
                        @endif

                        @if ($users->currentPage() !== $users->lastPage())
                            <a href="{{ $users->nextPageUrl() }}">{{ trans('general.nextPage') }}</a>
                        @endif
                    </span>
                </section>
            @endif
        </div>
    </div>
@endsection
