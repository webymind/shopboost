@component('mail::message')
    # Cash Collection Requested

    Store #{{ $store->id }}, ({{ $store->name }}) has requested a cash pickup.

    Address: {{ $store->address }}
    Contact: {{ $store->phone }} / Whatsapp: {{ $store->whatsapp }}

    Please arrange for a representative to collect cash in person.

    Thanks,
    {{ config('app.name') }}
@endcomponent
