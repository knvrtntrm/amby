@extends('layouts.app')

@section('content')

<offices-map kantoren="{{ $kantoren }}"></offices-map>

<section class="section">
	<div class="container">
		<h1 class="title has-text-centered">Kantoren</h1>
		<div class="office-items">
		@foreach($kantoren as $kantoor)
		<div class="office-item">

			<span class="office-item-left">
				<a class="office-item-title" href="{{ route('kantoren.kantoor', ['kantoor' => $kantoor->slug]) }}">{{ $kantoor->name }}</a> <p>| {{ $kantoor->province }}</p>
				{{-- <p>{{ $kantoor->fullAddress() }}</p> --}}
			</span>
			<span class="office-item-right">
				<a href="/kantoren/{{ $kantoor->slug }}" class="button button-red">Meer info</a>
			</span>
		</div>
		@endforeach
		</div>
		<div class="clearfix"></div>
	</div>
</section>

@endsection