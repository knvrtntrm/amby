@extends('layouts.app')

@section('content')

<section class="section">
	<div class="container">
		<h1 class="title has-text-centered mb-50">Werken bij amby</h1>
		<div class="columns">
		<div class="column mb-50 has-border-right">
			<h1 class="subtitle has-text-centered is-uppercase">Wat houdt werken bij amby in?</h1>
				<p class="is-70-wide-and-centered">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa minus nisi amet iste, accusantium pariatur ipsa recusandae consequuntur ut. Amet sint, at cum incidunt delectus quas. Commodi facere, qui culpa.
				<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa aliquam tenetur quasi accusamus neque odit officia voluptate modi amet corporis iure consectetur, soluta optio recusandae provident, labore error laudantium porro!</p>
			</div>
			<div class="column">
			@if(session()->has('success'))
				<article class="message is-success">
					<div class="message-body has-text-centered">
						{{ session('success') }}
					</div>
				</article>
				@endif
				<h1 class="subtitle is-uppercase has-text-centered">Spontaan solliciteren</h1>
				<form action="{{ route('apply') }}" class="office-form" method="post">
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
					<label class="label" for="kantoor">Kies een kantoor</label>
						<p class="control is-expanded">
							<span class="select is-fullwidth">
							<select name="kantoor" value="{{ old('kantoor') }}">
								<option disabled selected>Kies een kantoor</option>
								@foreach($kantoren as $kantoor)
									<option value="{{ $kantoor->id }}">{{ $kantoor->name }}</option>
								@endforeach
							</select>
							<p class="help is-danger">{{ $errors->first('kantoor') }}</p>
							</span>
						</p>
					</div>
					<div class="field">
						<p class="control">
							<label for="bericht" class="label">Motivatie</label>
							<textarea class="textarea" name="motivatie" placeholder="Motivatie" value="{{ old('bericht') }}" ></textarea>
						</p>
						<p class="help is-danger">{{ $errors->first('bericht') }}</p>
					</div>

					<button type="submit" class="button button-red">Verzenden</button>
				</form>
			</div>

		</div>

	</div>
</section>

@endsection