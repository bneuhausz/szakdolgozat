@extends('admin.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/list.css') }}">
@endsection

@section('content')
    <div id="newsBox">
        <div class="col-md-6">
            <h1>
                {{ trans('header.news') }}
            </h1>

            <div id="searchBox">
                <form action="{{ route('admin.article.search') }}" method="post">
                    <div class="input-group">
                        <label for="name">{{ trans('article.title') }}</label>
                        <input type="text" name="name">
                        <button type="submit" class="btn btn-default btn-xs">{{ trans('general.search' ) }}</button>
                    </div>

                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            </div>

            <div id="list">
                <ul>
                    @foreach ($articles as $article)
                        <li>
                            @if (Config::get('app.locale') == 'hu')
                                <p>
                                    <a href="{{ route('admin.article', ['articleId' => $article->id]) }}">{{ $article->title_hu }}</a>
                                    <span class="delete">
                                        <a href="{{ route('admin.article.edit', ['id' => $article['id']]) }}" class="btn btn-primary btn-xs">{{ trans('general.edit') }}</a>
                                        <a href="{{ route('admin.article.delete', ['id' => $article['id']]) }}" class="btn btn-danger btn-xs">{{ trans('general.delete') }}</a>
                                    </span>
                                </p>
                            @elseif (Config::get('app.locale') == 'en')
                                <p>
                                    <a href="{{ route('admin.article', ['articleId' => $article->id]) }}">{{ $article->title_en }}</a>
                                    <span class="delete">
                                        <a href="{{ route('admin.article.edit', ['id' => $article['id']]) }}" class="btn btn-primary btn-xs">{{ trans('general.edit') }}</a>
                                        <a href="{{ route('admin.article.delete', ['id' => $article['id']]) }}" class="btn btn-danger btn-xs">{{ trans('general.delete') }}</a>
                                    </span>
                                </p>
                            @endif
                        </li>
                    @endforeach
                </ul>

                @if ($articles->lastPage() > 1)
                    <section class="pagination">
                        <span class="pagination">
                            @if ($articles->currentPage() !== 1)
                                <a href="{{ $articles->previousPageUrl() }}">{{ trans('general.previousPage') }}</a>
                            @endif

                            @if ($articles->currentPage() !== $articles->lastPage())
                                <a href="{{ $articles->nextPageUrl() }}">{{ trans('general.nextPage') }}</a>
                            @endif
                        </span>
                    </section>
                @endif
            </div>
        </div>
    </div>

    <div id="messageBox">
        <div class="col-md-6">
            <h1>
                {{ trans('header.messages') }}
            </h1>

            <div id="searchBox">
                <form action="{{ route('admin.message.search') }}" method="post">
                    <div class="input-group">
                        <label for="name">{{ trans('email.subject') }}</label>
                        <input type="text" name="name">
                        <button type="submit" class="btn btn-default btn-xs">{{ trans('general.search' ) }}</button>
                    </div>

                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            </div>

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
        </div>
    </div>
@endsection
