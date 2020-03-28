{{--
  Archive Name: Fundraiser Archive Page
--}}

@extends('layouts.app')

@section('content')
<!-- archive-fund.blade.php -->
  @include('partials.page-header')
	<section class="article-title hero article-banner-container" style="background-image:url({{ $featured_image['url'] }})">
		<h1 class="title is-size-1 is-size-3-touch">
			{{ the_field('page_title') }}
		</h1>
		test
	</section>
  <section class="fundraise-hero">
		@while (have_posts()) @php the_post() @endphp
			@include('partials.content-'.get_post_type())
		@endwhile
		
		{!! get_the_posts_navigation() !!}
	</section>
@php do_action('get_contact-section') @endphp
@include('partials.contact-section')

@endsection