@extends('layouts.app')

@section('content')
<div class="banner">
	<h1 class="title">Amby dienstencheques</h1>
</div>
<section class="section">

	<div class="container has-text-centered">

	<h4 class="subtitle">Onze persoonlijke sfeer zorgt voor een gemotiveerd team van huishoudhulpen en tevreden klanten</h4>
	<br>
		<p class="is-70-wide-and-centered">Een persoonlijk contact en persoonlijke begeleiding staan voorop! <br>
		Vauit deze filosofie streeft Amby naar een perfecte match tussen klant en huishoudhulp.</p>
		<br>
	 <hr>
		<section class="section">

		<h2 class="subtitle">Wij bieden onze klanten een persoonlijke service aan:</h1>

		<p>
			Wij komen met plezier bij u thuis langs om alles te overlopen. Uiteraard bent u ook altijd welkom in één van onze kantoren bij u in de buurt.
			Wij leggen u graag alles uit omtrent de dienstencheque-verlening en helpen u graag verder waar mogelijk.
			Onze huishoudhulpen worden geselecteerd op basis van referenties, motivatie, flexibiliteit en betrouwbaarheid.
			Uw tevredenheid en feedback is voor ons belangrijk zodat we kunnen bijsturen indien nodig.
			We proberen steeds dezelfde huishoudhulp op hetzelfde tijdstip bij u langs te sturen en kunnen voor vervanging zorgen bij ziekte of verlof van de huishoudhulp.
		</p>
		

<br>
<a href="{{ route('kantoren') }}" class="button button-red">Klant worden</a>

</section>

<section class="section">
		<h2 class="subtitle">Onze huishoudhulpen kunnen rekenen op een persoonlijk aanspreekpunt:</h1>

		<p>
			Op kantoor staan er steeds gemotiveerde collega's voor u klaar die u kunnen helpen met al uw ragen.
			Er wordt een kwalitatieve opleiding voorzien op basis van specifieke noden en daarnaast wordt er nog bijgeschoold in productkennis en schoomaaktechnieken.
			De huishoudhulp kan rekenen op een 100% correcte administratie en loonverwerking.
		</p>

		<br>
		
		<a href="{{ route('werken') }}" class="button button-red">Werken als huishoudhulp</a>

		</section>
	</div>
</section>

{{-- <section class="section facts">
	<div class="container">
		<div class="columns">
			<div class="column">
				<div class="fact">
					<span class="upper-fact">{{ \App\Kantoor::count() }}</span>
					<p>Kantoren in Vlaanderen</p>
				</div>
			</div>
			<div class="column">
				<div class="fact">
					<span class="upper-fact">150</span>
					<p>Gemotiveerde huishoudhulpen</p>
				</div>
			</div>
			<div class="column">
				<div class="fact">
					<span class="upper-fact">400</span>
					<p>Tevreden klanten</p>
				</div>
			</div>
		</div>
	</div>
</section> --}}

<section class="section">
	<div class="container"></div>
</section>


@endsection