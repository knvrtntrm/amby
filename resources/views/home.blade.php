@extends('layouts.app')

@section('content')
<div class="banner">
	<h1 class="title">AMBY DIENSTENCHEQUES</h1>
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
					<h2 class="subtitle is-fat">Wij bieden een kwalitatieve service op maat van de klant aan</h2>

						Onze Office managers komen met plezier bij u thuis langs om alle huishoudelijke taken te overlopen en om alle belangrijke zaken te bespreken. Komt u liever zelf eens naar het kantoor? Onze deur staat uiteraard altijd voor iedereen open. Wees welkom in onze Amby kantoren!
						<br><br>
						Is dit uw eerste werking met dienstencheques? Amby begeleidt u bij de registratie als nieuwe dienstencheque-gebruiker, bij de aanmaak van een persoonlijke Sodexo-webruimte, bij het bestellen van dienstencheques, enz. We streven ernaar een kwalitatief antwoord te bieden op alle vragen. <br><br>
						Ons doel is het vinden van een huishoudhulp waar u zich goed bij voelt. Daarom selecteren we onze huishoudhulpen op basis van referenties, motivatie, flexibiliteit en betrouwbaarheid. Bij de eerste kennismaking overlopen jullie samen het takenpakket en stemmen jullie elkaars verwachtingen op elkaar af. Zo kan iedereen met een goed gevoel aan de samenwerking beginnen.<br><br>
						Amby streeft ernaar steeds dezelfde huishoudhulp op hetzelfde tijdstip thuis bij de klant langs te laten komen. Is uw vertrouwde huishoudhulp afwezig? Wij bieden een vervanging aan indien gewenst. Zo kan u steeds rekenen op de nodige huishoudelijke hulp!
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
				<h2 class="subtitle is-fat">Onze huishoudhulpen kunnen rekenen op een persoonlijk aanspreekpunt</h2>

				<p>
					Op <a href="{{ route('kantoren') }}">kantoor</a> staan er steeds gemotiveerde collega's voor u klaar die u kunnen helpen met al uw vragen. <br><br>
					Er wordt een kwalitatieve opleiding voorzien op basis van specifieke noden. Daarnaast wordt er doorlopend bijgeschoold in productkennis en schoonmaaktechnieken.
					<br><br>
					Onze huishoudhulpen kunnen rekenen op een 100% correcte administratie en loonverwerking.
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