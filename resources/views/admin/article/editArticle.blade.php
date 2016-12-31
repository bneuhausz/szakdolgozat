@extends('admin.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
    @include('partials.info-box')
    
    <form action="{{ route('admin.article.update') }}" method="post" class="form-horizontal">
      <fieldset>
        <legend>
            @if (Config::get('app.locale') == 'hu')
                <h1>
                    {{ $article->title_hu }}
                </h1>
            @elseif (Config::get('app.locale') == 'en')
                <h1>
                    {{ $article->title_en }}
                </h1>
            @endif
        </legend>

        <div class="form-group">
          <label for="title_hu" class="col-lg-2 control-label">{{ trans('article.title_hu') }}</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="title_hu" id="title_hu" value="{{ $article->title_hu }}">
          </div>
        </div>

        <div class="form-group">
          <label for="title_en" class="col-lg-2 control-label">{{ trans('article.title_en') }}</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="title_en" id="title_en" value="{{ $article->title_en }}">
          </div>
        </div>

        <div class="form-group">
          <label for="content_hu" class="col-lg-2 control-label">{{ trans('article.content_hu') }}</label>
          <div class="col-lg-10">
            <textarea class="form-control" rows="10" name="content_hu" id="content_hu">{{ $article->body_hu }}</textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="content_en" class="col-lg-2 control-label">{{ trans('article.content_en') }}</label>
          <div class="col-lg-10">
            <textarea class="form-control" rows="10" name="content_en" id="content_en">{{ $article->body_en }}</textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-danger">{{ trans('general.cancel') }}</button>
            <button type="submit" class="btn btn-primary">{{ trans('general.submit') }}</button>
          </div>
        </div>

        <input type="hidden" name="id" value="{{ $article->id }}">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </fieldset>
    </form>
@endsection