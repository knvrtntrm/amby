@extends('layouts.app')

@section('content')

<section class="section">
	<div class="container">

	<h2 class="subtitle has-text-centered">Wilt u klant worden of heeft u interesse in een job als huishoudhulp? <br>
		Spring dan gerust binnen of neem contact op met één van onze Amby-kantoren</h2>
		<br>
		<h1 class="title has-text-centered">Kantoren</h1>
		<div class="office-items">
		@foreach($kantoren as $kantoor)
		<div class="office-item">

			<span class="office-item-left">
				<a class="office-item-title" href="{{ route('kantoren.kantoor', ['kantoor' => $kantoor->slug]) }}">{{ $kantoor->name }}</a> <p>| {{ $kantoor->province }}</p><br>
				<a href="/kantoren/{{ $kantoor->slug }}" class="button button-red">Meer info</a>
			</span>

		</div>
		@endforeach
		</div>
		<div class="clearfix"></div>
	</div>
</section>

<offices-map kantoren="{{ $kantoren }}"></offices-map>

@endsection

@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZSeqrAmWQzwfMXZwE7kz7UMFVeXKJls&callback=app.init"
    async defer></script>
    @endsection
