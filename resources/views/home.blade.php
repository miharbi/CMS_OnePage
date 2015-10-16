@extends('app')
@section('title')@parent - {{ trans('home.home') }} @stop
@section('content')
		@include('partial.slider')
		@include('partial.us')
		@include('partial.courses')
		@include('partial.schedules')
		@include('partial.staff')
		@include('partial.events')
		@include('partial.schedules')
@endsection
