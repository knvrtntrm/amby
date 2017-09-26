@extends('layouts.app')

@section('content')
	<h1 class="title has-text-centered mb-50 mt-50">Werken bij amby</h1>
	<section class="has-gray-background">
		<div class="container">
		<h1 class="subtitle has-text-centered is-uppercase">Wat houdt werken bij amby in?</h1>
		<p class="is-70-wide-and-centered">Als familiale organisatie staan we dicht bij onze mensen. Een persoonlijke aanpak tegenover klanten, huishoudhulpen en interne medewerkers is voor ons cruciaal.
			Met meer dan 10 jaar ervaring in de dienstencheque-sector spelen wij in op uw wensen en noden. Wie bij Amby komt werken, komt terecht in een hecht en gemotiveerd team.</p>
		<br></div></section>
<section class="section">

	<div class="container">




		<section class="section">
		<div class="columns">
		<div class="column mb-50 has-border-right">
				<h1 class="subtitle is-70-wide-and-centered is-uppercase is-fat">Solliciteer als huishoudhulp</h1>
				<p class="is-70-wide-and-centered">Hou je van een kraaknette omgeving? Zijn orde en netheid heel belangrijk voor jou?
				Ben je betrouwbaar en behulpzaam? Kom je graag bij andere mensen over de vloer en ben je sociaal vaardig?
				Beschik je over het nodige organisatietalent om verschillende huishoudelijke taken aan te pakken en tot een goed einde te brengen?
					<br>Dan ben jij de geknipte persoon!
				Naast een persoonlijke begeleiding kan je bij Amby ook rekenen op:
				</p><br>
				<ul class="is-70-wide-and-centered has-green-bg">
					<li>- Competitief loon volgens anciënniteit</li>
					<li>- Vakantiegeld</li>
					<li>- Eindejaarspremie</li>
					<li>- Contract van onbepaalde duur</li>
					<li>- Onkostenvergoeding</li>
					<li>- Uren zelf kiezen</li>
					<li>- Werken dicht bij je thuis</li>
				</ul>
				<br>
				<p class="is-70-wide-and-centered mb-50">
					Helemaal overtuigd? <br><br>
					Vul snel het formulier hiernaast in en kies het Amby kantoor bij u in de buurt.
					We contacteren jou zo snel mogelijk om een afspraak te maken op ons kantoor zodat we kunnen kennis maken.
				</p>
				<br>
				<h1 class="subtitle is-70-wide-and-centered is-uppercase is-fat">Solliciteer als kantoormedewerker</h1>
				<p class="is-70-wide-and-centered">Ben je een administratieve duizendpoot met commercieel talent? Solliciteer dan vandaag nog, misschien ben jij de collega naar wie we op zoek zijn.
				Vul het formulier in en selecteer bij "Kies een kantoor" ons hoofdkantoor.
				Van zodra we een gepaste vacature vrij hebben, nemen we contact met je op.
				</p>
			</div>
			<div class="column has-text-centered">

				<img class="is-250-high" src="images/hhh_new.png" alt="hhh">
				
			@if(session()->has('success'))
				<article class="message is-success">
					<div class="message-body has-text-centered">
						{{ session('success') }}
					</div>
				</article>
				@endif
				<h1 class="subtitle is-uppercase has-text-centered">Spontaan solliciteren</h1>
				<form action="{{ route('apply') }}" class="office-form" method="post" enctype="multipart/form-data">
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
							<label class="label" for="cv">Cv uploaden ( PDF )</label>
							<input type="file" name="cv" id="cv">
						</p>
						<p class="help is-danger">{{ $errors->first('cv') }}</p>
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
		</section>
	</div>
</section>

@endsection