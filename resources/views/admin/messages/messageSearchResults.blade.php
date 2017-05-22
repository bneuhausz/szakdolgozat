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
            {{ trans('header.messages') }}
        </h1>

        <div id="searchBox">
            <form action="{{ route('admin.message.search') }}" method="post">
                <div class="input-group">
                    <label for="name">{{ trans('email.subject') }}</label>
                    <input type="text" name="name" value="{{ $name }}">
                    <button type="submit" class="btn btn-default btn-xs">{{ trans('general.search' ) }}</button>
                </div>

                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>

        @if (isset($fail))
            <div class="alert alert-danger">
                <p>{{ $fail }}</p>
            </div>
        @endif

        @if(isset($messages))
            <div id="list">
                <ul>
                    @foreach ($messages as $message)
                        <li>
                            <p>
                                <a href="{{ route('admin.message', ['messageId' => $message->id]) }}">{{ $message->subject }}</a>
                                <span class="delete">
                                    <a href="{{ route('admin.message.delete', ['id' => $message['id']]) }}" class="btn btn-danger btn-xs">{{ trans('general.delete') }}</a>
                                </span>
                            </p>
                        </li>
                    @endforeach
                </ul>

                @if ($messages->lastPage() > 1)
                    <section class="pagination">
                        <span class="pagination">
                            @if ($messages->currentPage() !== 1)
                                <a href="{{ $messages->previousPageUrl() }}">{{ trans('general.previousPage') }}</a>
                            @endif

                            @if ($messages->currentPage() !== $messages->lastPage())
                                <a href="{{ $messages->nextPageUrl() }}">{{ trans('general.nextPage') }}</a>
                            @endif
                        </span>
                    </section>
                @endif
            </div>
        @endif
    </div>
@endsection
