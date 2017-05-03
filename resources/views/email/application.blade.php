@component('mail::message')
# Spontane sollicitatie {{ $kantoor->name }}

Naam: {{ $data['name'] }} <br>
Email: {{ $data['email'] }} <br>
Telefoon: {{ $data['telefoon'] }} <br> <br>
Motivatie: <br>
<p>{{ $data['motivatie'] }}</p>


@endcomponent