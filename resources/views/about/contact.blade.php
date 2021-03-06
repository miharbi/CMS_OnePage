@extends('app')

@section('content')

<div class="container" style="margin-top: 80px;">
  <div class="row">
    <div class="panel panel-default">
      
      <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;"><span class="glyphicon glyphicon-envelope"></span> {{trans('about.contact')}}</h4>
      </div>
      <div class="panel-body">
        <div class="col-sm-12 col-md-12 col-lg-6" style="font-size: 140%;">
          @include('about.info')
          @include('about.map')
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
          @include('about.contact_form')
        </div>
      </div>
    </div>
  </div>
</div>

@endsection