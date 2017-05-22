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
            {{ trans('header.news') }}
        </h1>

        <div id="searchBox">
            <form action="{{ route('admin.article.search') }}" method="post">
                <div class="input-group">
                    <label for="name">{{ trans('article.title') }}</label>
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

        @if (isset($articles))
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
        @endif
    </div>
@endsection
