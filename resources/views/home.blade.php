@extends('layouts.app')

@section('content')
<div class="banner">
	<h1 class="title">Amby dienstencheques</h1>
</div>
<section class="section">

	<div class="container">

		<section class="section">

			<div class="columns">

				<div class="column">
					<img src="/images/hhh_new.png" alt="hhh">
				</div>
				<div class="column is-1"></div>
				<div class="column is-7">
					<p>
					<h2 class="subtitle is-fat">Onze persoonlijke aanpak zorgt zowel voor een gemotiveerd team van huishoudhulpen als voor tevreden klanten</h2>

					Een persoonlijk contact en een begeleiding op maat staan voorop.<br>
					Vanuit deze filosofie streeft Amby naar een perfecte match tussen klant en huishoudhulp.
					</p>
					<br><br>

					<p>
					<h2 class="subtitle is-fat">Wij bieden onze klanten een persoonlijke service aan:</h2>

						Wij komen met plezier bij u thuis langs om alles te overlopen. Uiteraard bent u ook altijd welkom in één van onze kantoren bij u in de buurt.
						<br><br>
						Wij kunnen u begeleiden in uw registratie als nieuwe dienstencheque-gebruiker, voor het bestellen van dienstencheques, enz.
						We streven ernaar een kwalitatief antwoord te bieden op al uw vragen. <br><br>
						Onze huishoudhulpen worden geselecteerd op basis van referenties, motivatie, flexibiliteit en betrouwbaarheid.
						Uw tevredenheid en feedback is voor ons belangrijk zodat we kunnen bijsturen indien nodig. <br><br>
						We streven ernaar steeds dezelfde huishoudhulp op hetzelfde tijdstip bij u langs te laten komen en zorgen indien gewenst voor vervanging bij ziekte of verlof van de huishoudhulp.
					</p>

					<br>
					<a href="{{ route('kantoren') }}" class="button button-red">Klant worden</a>
				</div>
			</div>

</section>
	</div>
</section>
<section class="section has-gray-background">
	<div class="container p-20">
		<div class="columns">
			<div class="column is-8">
				<h2 class="subtitle is-fat">Onze huishoudhulpen kunnen rekenen op een persoonlijk aanspreekpunt:</h2>

				<p>
					Op kantoor staan er steeds gemotiveerde collega's voor u klaar die u kunnen helpen met al uw vragen. <br><br>
					Er wordt een kwalitatieve opleiding voorzien op basis van specifieke noden en daarnaast wordt er doorlopend bijgeschoold in productkennis en schoonmaaktechnieken.
					<br><br>
					De huishoudhulp kan rekenen op een 100% correcte administratie en loonverwerking.
				</p>
				<br>
				<a href="{{ route('werken') }}" class="button button-red">Werken als huishoudhulp</a>
			</div>
			<div class="column is-1"></div>
			<div class="column">
				<img src="/images/hhh_new2.png" alt="">
			</div>
				
		</div>
		
		
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

{{--<section class="section has-orange-bg">
	<div class="container"></div>
</section>--}}


@endsection