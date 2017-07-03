@extends('layouts.app')

@section('content')

<section class="section">
	<div class="container">
		<h1 class="title has-text-centered mb-50">Dienstencheques</h1><br>
		<div class="columns has-text-centered">
			<div class="column has-border-right mb-50">
				<h1 class="subtitle is-uppercase">Wat is een dienstencheque?</h1>
				<p class="is-70-wide-and-centered">Een dienstencheque is een betaalmiddel waarvoor de 3 gewesten (Vlaanderen, Brussel en Wallonië) een finaniële bijdrage leveren.
				Iedere meerderjarige persoon die zijn hoofdverblijfplaats heeft in één van deze gewesten, kan dankzij de dienstencheques tegen een gunstige prijs beroep doen op huishoudhulp via een erkend bureau.
				Per gewerkt uur ontvangt de huishoudhulp 1 dienstencheque.</p>
				{{-- <a href="{{ route('diensten') }}" class="button button-red mt-50">Huishoudhulp aanvragen</a> --}}
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
					<p class="is-70-wide-and-centered">De prijs van een dienstencheque is 9 EURO per cheque voor de eerste 400 aangekochte cheques per kalenderjaar.
					De overige 100 dienstencheques die u nog kan aankopen per kalenderjaar bedragen 10 EURO per cheque.
					Bovendien geniet je van een belastingsvermindering per dienstencheque waardoor dit nog extra voordelig is.
					(Deze vermindering is afhankelijk van het gewest waarin u gedomicilieerd bent)
					Jaarlijks ontvangt u van Sodeo een fiscaal attest dat u bij uw belastingsaangifte kan voegen om van dit voordeel te genieten.</p>
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
			
			<p class="has-text-centered is-70-wide-and-centered">Tijdens uw registratie bij Sodexo kunt u kiezen tussen papieren of elektronische dienstencheques.
			Papieren dienstencheques krijgt u per post, moet u zelf invullen en ondertekenen bij afgifte.
			Elektronische dienstencheques beheert u zelf via uw beveiligde pagina of via een app op uw smartphone. (De prestatie die wordt ingebeld door uw huishoudhulp moet steeds door u worden gevestigd of betwist via deze pagina of app)</p>

			<br><br>

			<p class="has-text-centered is-70-wide-and-centered">
			<h1 class="subtitle is-uppercase has-text-centered">Kiezen voor elektronische dienstencheques is kiezen voor gemak en veiligheid.</h1>
			<br>
				<ul>
					<li class="has-text-centered"><span>Veiliger in gebruik</span> <br>verlies of diefstal is niet meer mogelijk</li>
					<li class="has-text-centered"><span>Onmiddellijk beschikbaar</span><br>na bestelling ontvangt u de dienstencheques eerstdaags in uw elektronische portefeuille</li>
					<li class="has-text-centered"><span>Veel betrouwbaarder</span> <br>kans op vervallen cheques is veel kleiner aangezien de oudste cheques altijd eerst worden gebruikt</li>
					<li class="has-text-centered"><span>Duidelijker</span> <br>garantie dat de dienstencheque voldoet aan alle voorwaarden omdat er niets kan misgaan vij het invullen/verwerken van de cheque</li>
				</ul>
			</p>
			<br>
			<p class="has-text-centered is-70-wide-and-centered">
				<a href="http://www.dienstencheques-vlaanderen.be/en-waarom-niet-overschakelen-naar-de-elektronische-dienstencheques">Hoe overschakelen van papieren naar elektronische cheques?</a>
			</p>

			</div>
		</section>


		<section class="section">
		<div class="container p-20">
			<h1 class="title has-text-centered mb-50">Hoe kunt u dienstencheques bestellen?</h1>
				<div class="columns">
					<div class="column">
						<p class="has-text-centered is-70-wide-and-centered">Eerst en vooral dient u zich te registreren via Sodexo. U kan dit via de site doen of u kunt uiteraard ook langskomen in één van onze Amby-kantoren.
						Na uw registratie ontvangt u een bevestiging met uw persoonlijke gebruikersnummer.
						Het is heel belangrijk om dit gebruikersnummer goed bij te houden want dit nummer gebruikt u nadien om dienstencheques te vestellen.</p>
						</div>
					<div class="column">
						<p class="has-text-centered is-70-wide-and-centered">Er moeten steeds minimum 10 dienstencheques aangekocht worden bij Sodexo.
						De dienstencheques kunnen worden aagekocht d.m.v. een overschrijving op het bankrekeningnummer van Sodexo van het gewest waar u op gedomicilieerd bent. De gestructureerde mededeling is uw gebruikersnummer van Sodexo.</p>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="container">
				
				<div class="columns has-text-centered">
					<div class="column has-border-right">
						<p class="upper-fact is-medium-text">Dienstencheques in het Vlaams gewest</p>
						<a href="#" class="button button-red mt-20">Sodexo Vlaanderen</a>
					</div>
					<div class="column has-border-right">
						<p class="upper-fact is-medium-text">Dienstencheques in het Brussels gewest</p>
						<a href="#" class="button button-red mt-20">Sodexo Brussel</a>
					</div>
					<div class="column">
						<p class="upper-fact is-medium-text">Dienstencheques in het Waals gewest</p>
						<a href="#" class="button button-red mt-20">Sodexo Wallonië</a>
					</div>
				</div>
			</div>
		</section>

		@endsection