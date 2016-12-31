@extends('admin.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
    @if (Config::get('app.locale') == 'hu')
    	<h1>{{ $article->title_hu }}</h1>
    	<p>{{ $article->body_hu }}</p>                       
    @elseif (Config::get('app.locale') == 'en')
        <h1>{{ $article->title_en }}</h1>
    	<p>{{ $article->body_en }}</p>                       
    @endif

    <hr>

    <a href="{{ route('admin.article.edit', ['id' => $article['id']]) }}" class="btn btn-primary">{{ trans('general.edit') }}</a>
    <a href="{{ route('admin.article.delete', ['id' => $article['id']]) }}" class="btn btn-danger">{{ trans('general.delete') }}</a>
@endsection
