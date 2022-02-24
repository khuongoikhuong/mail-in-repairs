@extends('layouts.master-page')

@section('topnav')
  @include('partials.nav.macbook-nav')
@endsection

@section('slide')
  @include('partials.sections.ps5-slide')
@endsection

@section('content')
  @include('partials.sections.macbook-pricing')
  @include('partials.sections.macbook-process')
  @include('partials.sections.macbook-order')
  @include('partials.sections.who-we-are')
  @include('partials.sections.contact-us')
@endsection
