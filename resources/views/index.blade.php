@extends('layouts.app')

@section('content')
    <main>
        @include('layouts.navigation')

        @include('landing_page')
        @include('menus.index')
        @include('galery')
    </main>

    @include('layouts.footer')
@endsection
