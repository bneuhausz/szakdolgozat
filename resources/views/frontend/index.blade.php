@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/index.css') }}">
@endsection

@section('content')
    @include('partials.info-box')

    <div class="articles col-md-8 col-md-offset-2">
        @foreach ($articles as $article)
            <article>
            @if (Config::get('app.locale') == 'hu')
                <h2>{{ $article->title_hu }}</h2>
                {{ $article->created_at }}
                <hr>
                <p>{{ $article->body_hu }}</p>
            @else
                <h2>{{ $article->title_en }}</h2>
                {{ $article->created_at }}
                <hr>
                <p>{{ $article->body_en }}</p>
            @endif
            </article>
        @endforeach

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
@endsection
