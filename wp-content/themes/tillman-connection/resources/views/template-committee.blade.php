{{--
  Template Name: Committee Template
--}}

<!-- template-committee.blade.php -->

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header')
@include('partials.content-page')
@endwhile
@endsection