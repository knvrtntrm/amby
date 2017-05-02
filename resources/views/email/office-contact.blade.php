@component('mail::message')
# Contactformulier Amby {{ $kantoor->name }}

Naam: {{ $data['name'] }} <br>
Email: {{ $data['email'] }} <br>
Telefoon: {{ $data['telefoon'] }} <br> <br>
Bericht: <br>
<p>{{ $data['bericht'] }}</p>

<br>
{{ config('app.name') }}
@endcomponent
