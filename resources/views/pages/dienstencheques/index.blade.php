@extends('layouts.app')

@section('content')

<section class="section">
	<div class="container">
		<h1 class="title has-text-centered mb-50">Dienstencheques</h1><br>
		<div class="columns has-text-centered">
			<div class="column has-border-right mb-50">
				<h1 class="subtitle is-uppercase">Wat is een dienstencheque?</h1>
				<p class="is-70-wide-and-centered">Een dienstencheque is een betaalmiddel waarvoor het Vlaamse Gewest een financiële bijdrage levert. Iedere meerderjarige persoon die in het Vlaamse Gewest zijn hoofdverblijfplaats heeft, kan dankzij dienstencheques tegen een gunstige prijs beroep doen op huishoudhulp.</p>
				<a href="{{ route('diensten') }}" class="button button-red mt-50">Huishoudhulp aanvragen</a>
					{{-- <ul class="list">
						<li class="is-flex"><strong class="is-red pr-5">|</strong> Registreer u via Sodexo (Klik hier) of ga langs in een Amby-kantoor om u hier gratis bij te helpen.</li>
						<li class="is-flex"><strong class="is-red pr-5">|</strong> U verkrijgt een login met paswoord</li>
						<li class="is-flex"><strong class="is-red pr-5">|</strong> U kiest nadien voor de papieren of elektronische dienstencheques</li>
						<li class="is-flex"><strong class="is-red pr-5">|</strong> Na uw registratie ontvangt u een bevestiging per post of mail met een persoonlijk gebruiksnummer. Dit nummer gebruikt u nadien om dienstencheques te bestellen.</li>
						<li class="is-flex"><strong class="is-red pr-5">|</strong> Papieren dienstencheques ontvangt u per post na 3 dagen. Elektronische dienstencheques ontvangt u onmiddellijk na bestelling.</li>
					</ul> --}}

				</div>
				<div class="column mb-50">
					<h1 class="subtitle is-uppercase">Wat kost een dienstencheque? </h1>
					<p class="is-70-wide-and-centered">Voor de prijs van 9 EUR per gewerkt uur heb je een huishoudhulp. Bovendien geniet je per persoon per dienstencheque een belastingvermindering van 2,70 EUR voor de eerste 156 aangekochte dienstencheques. Een dienstencheque van 9 EUR kost dus in werkelijkheid maar 6,30 EUR na belastingsvermindering. Jaarlijks ontvang je van Sodexo een fiscaal attest dat je bij jouw belastingaangifte moet voegen om van dit fiscaal voordeel te genieten.</p>
					{{-- <ul class="list">
						<li class="is-flex"><strong class="is-red pr-5">|</strong> Een gesubsidieerd betaalmiddel.</li>
						<li class="is-flex"><strong class="is-red pr-5">|</strong> Hulp bij huishoudelijk werk bij u thuis en buiten uw woning.</li>
						<li class="is-flex"><strong class="is-red pr-5">|</strong> Een tarief van €9 per uur en een belastingvermindering.</li>
						<li class="is-flex"><strong class="is-red pr-5">|</strong> Particulieren kunnen elektronische of papieren dienstencheques gebruiken.</li>
						<li class="is-flex"><strong class="is-red pr-5">|</strong> De huishoudhulp is verzekerd tegen arbeidsongevallen, wat niet het geval is bij zwartwerk.</li>
						<li class="is-flex"><strong class="is-red pr-5">|</strong> Vrouwen die als zelfstandige werken, krijgen bij de geboorte van hun kind 105 dienstencheques gratis via hun sociale verzekeringskas.</li>
						<li class="is-flex"><strong class="is-red pr-5">|</strong> Veel gestelde vragen</li>
					</ul> --}}
				</div>
			</div>
		</div>
	</section>

	<section class="section has-gray-background">
		<div class="container p-20">
			<h1 class="title has-text-centered mb-50">Papier of elektronisch?</h1>
			<p class="has-text-centered is-70-wide-and-centered">Je betaalt de huishoudhulp enkel via dienstencheques waar je zelf de controle over hebt en vermijdt zo het gebruik van cash geld.
				Papieren dienstencheques vul je zelf in en onderteken je bij afgifte. Bij de elektronische dienstencheques kan je de prestaties, ingegeven door jouw huishoudhulp, bevestigen of betwisten via uw Beveiligde Zone of via de applicatie op jouw smartphone. <br><br>
				Elektronische dienstencheques zijn bijzonder veilig aangezien het online beheren van jouw dienstencheques het risico op verlies of diefstal vermindert.
				Het bestelproces voor beide formaten is hetzelfde. De elektronische dienstencheque is na bestelling sneller beschikbaar en eenvoudig in gebruik. Hieronder vindt u een kort overzicht van de belangrijkste verschillen tussen beide formaten dienstencheques:</p>
			</div>
		</section>

		<section class="section">
			<div class="container">
				
				<div class="columns has-text-centered">
					<div class="column has-border-right">
						<p class="upper-fact is-medium-text">Aankopen in het Vlaams gewest:</p>
						<a href="#" class="button button-red mt-20">Meer info</a>
					</div>
					<div class="column has-border-right">
						<p class="upper-fact is-medium-text">Aankopen in Brussel</p>
						<a href="#" class="button button-red mt-20">Meer info</a>
					</div>
					<div class="column">
						<p class="upper-fact is-medium-text">Aankopen in het Waals gewest</p>
						<a href="#" class="button button-red mt-20">Meer info</a>
					</div>
				</div>
			</div>
		</section>

		@endsection