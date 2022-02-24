@extends('layouts.master-page')

@section('topnav')
  @include('partials.nav.macbook-nav')
@endsection

@section('slide')
  @include('partials.sections.macbook-slide')
@endsection

@section('content')
  @include('partials.sections.who-we-are')
  @include('partials.sections.contact-us')
@endsection
