@props(['title' => '', 'bodyClass' => '', 'footerLinks' => ''])

<x-base-layout :$title bodyClass="{{ $bodyClass }}">
    {{--  HEADER --}}
    <x-layouts.header />

    {{-- MAIN CONTENT --}}
    {{ $slot }}

    {{-- FOOTER --}}
    <footer>
        <a href="/about">Link 1</a>
        <a href="/contact">Link 2</a>

        {{ $footerLinks }}
    </footer>
</x-base-layout>
