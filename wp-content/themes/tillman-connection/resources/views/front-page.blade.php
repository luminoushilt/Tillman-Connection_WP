{{--
  Page Name: Front Page
--}}

@extends('layouts.app')

@section('content')
<!-- front-page.blade.php -->

<section class="hero get-connected-container">
	@php
		$featured_image = get_field('banner_image');
	@endphp
	<img src="{{ $featured_image['url'] }}" alt="{{ $featured_image['alt'] }}" class="img-responsive">
	<a class="button is-tillman-teal get-connected scroll-link" href="#greeting">Get Connected</a>
</section>
<section class="hero hero-section">
	<div class="hero-body">
		<div class="container">
			<div class="columns">
				<div class="column is-half-desktop family-greeting">
					<h1 class="title">
						{{ the_field('page_intro') }}
					</h1>
					{{ the_field('family_greeting') }}
				</div>
				<div class="column is-half-desktop tillman-connection-logo-section">
					<h2>Tillman Connection</h2>
					<i class="fas fa-wifi tillman-connection"></i>
					<span>21st Century</span>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hero hero-section">
	<div class="container hero-section-content">
		{{ the_field('reunion_mission_statement') }}
	</div>
</section>
<section class="hero hero-section">
	<div class="section-break-image">
		<div class="container">
			{{ the_field('location_pitch') }}
		</div>
	</div>
</section>
<section class="hero hero-section">
	<div class="container hero-section-content">
		{{ the_field('concluding_statement') }}
	</div>
</section>
<section class="hero hero-section">
	<div class="container hero-section-content">
		<p>
			For any questions, concerns or suggestions feel free to
			<a class="section-content-link" href="mailto:info@tillmanconnection.com">
				contact one of your committee members</a>.
		</p>
	</div>
</section>

@endsection