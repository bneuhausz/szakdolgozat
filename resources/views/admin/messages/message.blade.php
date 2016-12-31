@extends('admin.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('content')
    <h1>{{ $message->subject }}</h1>
    <p>{{ $message->body }}</p> 
    <hr>                      
    <a href="{{ route('admin.message.delete', ['id' => $message['id']]) }}" class="btn btn-danger">{{ trans('general.delete') }}</a>
@endsection