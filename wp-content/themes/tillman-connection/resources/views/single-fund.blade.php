{{--
  Template Name: Fundraiser Single Page
--}}

@extends('layouts.app')

@section('content')
<!-- single-fund.blade.php -->

@php
	$featured_image = get_field('banner_background_image');
@endphp

  <section class="article-title hero article-banner-container" style="background-image:url({{ $featured_image['url'] }})">
    <h1 class="title is-size-1 is-size-3-touch">
      {{ the_field('post_title') }}
    </h1>
  </section>
  <section class="fundraise-hero">
    <div class="container hero-section-content is-size-2 is-size-4-touch">
      {{ the_field('fundraiser_details') }}
    </div>
  </section>
@endsection
