{{--
  Template Name: Fundraiser Single Page
--}}

@extends('layouts.app')

@section('content')
<!-- single-fund.blade.php -->
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
