<?php
use App\Http\Controllers\CamisaController; ?>

<x-layout>
    <x-slot:title>
        Stick and Dress
    </x-slot>
    @auth
        {{ CamisaController::create(); }}
    @else
        @include('partials.landingPage')
    @endauth
</x-layout>