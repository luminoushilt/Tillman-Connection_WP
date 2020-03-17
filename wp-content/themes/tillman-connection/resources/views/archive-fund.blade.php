{{--
  Archive Name: Fundraiser Archive Page
--}}

@extends('layouts.app')

@section('content')
<!-- archive-fund.blade.php -->
  @include('partials.page-header')

  <section class="fundraise-hero">
		@while (have_posts()) @php the_post() @endphp
			@include('partials.content-'.get_post_type())
		@endwhile
		
		{!! get_the_posts_navigation() !!}
	</section>
@php do_action('get_contact-section') @endphp
@include('partials.contact-section')

@endsection