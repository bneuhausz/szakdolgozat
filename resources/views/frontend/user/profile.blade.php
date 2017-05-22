@extends('frontend.layouts.master')

@section('title')
    Neuhausz Bálint Szakdolgozat
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/userProfile.css') }}">
@endsection

@section('content')
    @include('partials.info-box')

    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="grey-panel-heading">
              <h3 class="panel-title">{{ $user->name }}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"><img src="{{ route('profile.image', ['filename' => $filename]) }}" alt="" class="img-responsive"></div>

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>{{ trans('user.registerDate') }}</td>
                        <td>{{ $user->created_at }}</td>
                      </tr>

                      <tr>
                        <td>{{ trans('user.email') }}</td>
                        <td>{{ $user->email }}</td>
                      </tr>

                      <tr>
                        <td>{{ trans('user.height') }}</td>
                        <td>{{ $user->height }}</td>
                      </tr>

                      <tr>
                        <td>{{ trans('user.weight') }}</td>
                        <td>{{ $user->weight }}</td>
                      </tr>

                      <tr>
                        <td>{{ trans('user.bmr') }}</td>
                        <td>{{ $user->bmr }}</td>
                      </tr>

                      <tr>
                        <td>{{ trans('user.benchPress') }}</td>
                        <td>{{ $user->bench_1rm }}</td>
                      </tr>

                      <tr>
                          <td>{{ trans('user.squat') }}</td>
                          <td>{{ $user->squat_1rm }}</td>
                      </tr>

                      <tr>
                          <td>{{ trans('user.deadlift') }}</td>
                          <td>{{ $user->deadlift_1rm }}</td>
                      </tr>

                      <tr>
                          <td>{{ trans('user.ohp') }}</td>
                          <td>{{ $user->ohp_1rm }}</td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-xs pull-right">{{ trans('user.editProfile') }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
