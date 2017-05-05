@extends('layouts.app')

@section('content')

<office-map address="{{ $kantoor->fullAddress() }}"></office-map>

<div class="office-details">
	
	<div class="details-wrapper">
		<h1 class="title">{{ $kantoor->name }}</h1>
		<div class="details">
			<p>{{ $kantoor->fullAddress() }}</p>
			<p>{{ $kantoor->formattedPhone() }}</p>
			<p>{{ $kantoor->email }}</p>
		</div>
		<br>
		<p>Maandag tot en met donderdag open van <br>
			<span class="is-red">
				{{ $kantoor->morning_open_from }} - {{ $kantoor->morning_open_till }}
			</span> en van 
			<span class="is-red">
				{{ $kantoor->afternoon_open_from }} - {{ $kantoor->afternoon_open_till }}
			</span>
		</p> <br>
		<p>Op vrijdag open van <br>
		<span class="is-red">
				08:30 - 12:30
			</span> en van 
			<span class="is-red">
				13:30 - 17:30
			</span>
		</p>
		<br>
		{{-- <a href="" class="button button-red">Route berekenen</a> --}}
		<hr>
		<p>Bereken de route naar dit kantoor</p> <br>
		{{-- <form action="/maps/{{ $kantoor->slug }}/calculate" method="post">
		{{ csrf_field() }}
		<div class="field">
			<p class="control">
				<input type="text" name="address" class="input" placeholder="Vul uw adres in">
			</p>
			</div>
			<p class="control">
				<button type="submit" class="button button-red">Route berekenen</button>
			</p>
		</form> --}}
		
		<div class="field">
			<p class="control">
				<input type="text" name="address" class="input" placeholder="Vul uw adres in" v-model="foreignAddress">
			</p>
			</div>
			<p class="control">
				<button class="button button-red" :disabled='foreignAddress == "" || foreignAddress == null' @click="calculateRoute">Route berekenen</button>
				<button class="button button-red" :disabled='foreignAddress == "" || foreignAddress == null' @click="openMaps">Open in maps</button>
			</p>
		
	</div>
</div>

<section class="section">
	<div class="container">
		<div class="columns is-centered">
			<div class="column">
				@if(session()->has('success'))
				<article class="message is-success">
					<div class="message-body has-text-centered">
						{{ session('success') }}
					</div>
				</article>
				@endif
				<h1 class="title has-text-centered pb-20">Een vraag stellen?</h1>
				<form action="{{ route('contact', ['kantoor' => $kantoor->slug]) }}" class="office-form" method="post">
					{{ csrf_field() }}
					<div class="field">
						<p class="control">
							<label for="name" class="label">Naam</label>
							<input class="input" name="name" type="text" placeholder="Naam" value="{{ old('name') }}" >
						</p>
						<p class="help is-danger">{{ $errors->first('name') }}</p>
						
					</div>
					<div class="field">
						<p class="control">
							<label for="email" class="label">Email</label>
							<input class="input" name="email" type="email" placeholder="Email" value="{{ old('email') }}" >
						</p>
						<p class="help is-danger">{{ $errors->first('email') }}</p>
					</div>
					<div class="field">
						<p class="control">
							<label for="telefoon" class="label">Telefoon</label>
							<input class="input" name="telefoon" type="text" placeholder="Telefoon" value="{{ old('telefoon') }}" >
						</p>
						<p class="help is-danger">{{ $errors->first('telefoon') }}</p>
					</div>
					<div class="field">
						<p class="control">
							<label for="bericht" class="label">Bericht</label>
							<textarea class="textarea" name="bericht" placeholder="Bericht" value="{{ old('bericht') }}" ></textarea>
						</p>
						<p class="help is-danger">{{ $errors->first('bericht') }}</p>
					</div>

					<button type="submit" class="button button-red">Verzenden</button>
				</form>
			</div>
			<div class="column is-half">
				<h4 class="subtitle">{{ $kantoor->name }}</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum delectus, iste laudantium a aliquam optio maxime sapiente animi natus molestias minima eius commodi ullam, alias quam dolore itaque temporibus sed.</p><br>
				<div class="office-image-wrapper">
					<img src="/images/offices/waregem.jpg" alt="" class="office-image">
				</div>
			</div>
		</div>
	</div>
</section>

@endsection