@extends('layouts.app')

@section('content')

<section class="section">
	<div class="container has-text-centered">
		<h1 class="title">Amby dienstencheques</h1>
		<br>
		<h4 class="subtitle">Al meer dan 10 jaar jouw specialist voor huishoudhulp met dienstencheques.</h4>
	<br>
		<p class="is-70-wide-and-centered">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, excepturi, temporibus. Minima tempore incidunt sunt animi, dolor, eligendi facere deserunt doloribus minus, repellat enim quae atque eveniet reiciendis vero blanditiis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus quaerat ratione inventore excepturi cupiditate asperiores ad assumenda id sed quas illum similique nemo nulla accusamus repellat, eos cum explicabo incidunt.</p>
		<br>
		<a href="{{ route('diensten') }}" class="button button-red">Huishoudhulp aanvragen</a>
		<a href="{{ route('werken') }}" class="button button-red">Werken als huishoudhulp</a>
	</div>
</section>

<section class="section facts">
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
</section>

<section class="section">
	<div class="container"></div>
</section>


@endsection