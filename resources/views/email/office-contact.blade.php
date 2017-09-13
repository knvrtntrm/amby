@component('mail::message')
# Contactformulier {{ $kantoor->name }}

Naam: {{ $data['name'] }} <br>
Email: {{ $data['email'] }} <br>
Telefoon: {{ $data['telefoon'] }} <br> <br>
Bericht: <br>
<p>{{ $data['bericht'] }}</p>

@endcomponent
