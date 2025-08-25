@extends('layouts.clean')



{{-- PAGE CONTENT --}}
@section('childContent')
    {{--  HEADER --}}
    @include('layouts.partials.header')

    {{-- MAIN CONTENT --}}
    @yield('content')

    {{-- FOOTER --}}
    <footer></footer>
@endsection
