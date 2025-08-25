<x-mail::message>
Bonjour {{ $response->contact->name }},

Nous avons pris en compte votre message :

> {{ $response->contact->message }}

Notre réponse :
{{ $response->content }}

Merci de nous avoir contactés.

Cordialement,
L’équipe support


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
