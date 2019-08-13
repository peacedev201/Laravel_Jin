@extends('layouts.app')

@section('title', $page->title)

@section('content')

    <div id="content">

        @include('partials.modals')

        <div class="contact-area">
            <h1>{{ $page->h1 }}</h1>
            {!! $page->content !!}
        </div>

        @include('partials.bottom_form')

        @include('partials.map')

    </div>

@endsection