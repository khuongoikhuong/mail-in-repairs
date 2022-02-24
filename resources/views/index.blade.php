@extends('layouts.master-page')

@section('topnav')
  @include('partials.nav.home-nav')
@endsection

@section('slide')
  @include('partials.sections.home-slide')
@endsection

@section('content')
  @include('partials.sections.home-macbook')
  @include('partials.sections.who-we-are')
  @include('partials.sections.contact-us')
@endsection
