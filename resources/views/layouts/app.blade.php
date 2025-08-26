@props(['title' => '', 'bodyClass' => '', 'footerLinks' => ''])

<x-base-layout :$title bodyClass="{{ $bodyClass }}">
    {{--  HEADER --}}
    <x-layouts.header />

    {{-- MAIN CONTENT --}}
    {{ $slot }}

</x-base-layout>
