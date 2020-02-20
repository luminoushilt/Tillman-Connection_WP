{{--
  Page Name: Front Page
--}}

@extends('layouts.app')

@section('content')
<!-- front-page.blade.php -->

<section class="section">
	<div class="section-hero">
		<a class="button button-default get-connected scroll-link" href="#greeting">Get Connected</a>
	</div>
</section>
<section class="section section-content" id="greeting">
	<h1 class="title">
		{{ the_field('page_intro') }}
	</h1>
	<div class="family-greeting">
		{{ the_field('family_greeting') }}
	</div>
	<div class="tillman-connection-logo-section">
		<h2>Tillman Connection</h2>
		<i class="fas fa-wifi tillman-connection"></i>
		<h2>21st Century</h2>
	</div>
</section>
<section class="section section-content">
	<p>
		Our guiding theme is "Strengthening Family through our connection." As a
		committee, we are charging family to not only clinch to this theme for
		the reunion but to honor and practice preserving the Tillman legacy.
	</p>
</section>
<section class="section no-margin section-break-image">
	<p>
		How will our theme be demonstrated throughout our weekend in the
		nation's capital and beyond?
	</p>
</section>
<section class="section section-content">
	<p>
		The 2021 committee has not only committed to planning a funfilled &amp;
		memorable weekend, but has also committed to bridging the generations
		within our family together. This theme will be experienced through
		multiple activities and events. As you continue to explore our family
		website, you will see a preliminary outline of the weekend itinerary.
		Please pay close attention to deadlines/important dates. We encourage
		you to visit our family website often for updates and messages. No
		exceptions to deadlines! For a successful outcome, we need your
		unwavering support, continuous participation and honoring of this family
		legacy.
	</p>
</section>
<section class="section section-content">
	<p>
		For any questions, concerns or suggestions feel free to
		<a class="section-content-link" href="mailto:info@tillmanconnection.com">
			contact one of your committee members</a>.
	</p>
</section>

@endsection