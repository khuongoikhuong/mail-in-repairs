@extends('layouts.master-page')

@section('topnav')
  @include('partials.nav.home-nav')
@endsection

@section('slide')
  @include('partials.sections.macbook-slide')
@endsection

@section('content')
  @include('partials.sections.macbook-pricing')
  @include('partials.sections.macbook-process')
  @include('partials.sections.macbook-order')
  @include('partials.sections.who-we-are')
  @include('partials.sections.contact-us')
@endsection
