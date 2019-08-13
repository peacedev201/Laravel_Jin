@extends('layouts.app')

@section('title', $page->title)

@section('content')

    <div id="content">

        @include('partials.modals')

        <div class="out-area">
            <div class="project-out">
                <div class="info">

                    @include('partials.lang')

                </div>
                <h1>{{ $page->h1 }}</h1>
                <div class="project-info">
                    <div class="proj-pic">
                        <img src="{{ $page->image }}" alt="Picture" />
                        <div class="out-text">
                            <div class="proj-text">
                                <p>{{ $page->proj_text }}</p>
                            </div>
                            <a class="btn rounded-0" data-toggle="modal" href="#Modal2"><span>Anfrage Stellen</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="red-area">
            <div class="red-text">
                <h2>{{ $page->h2 }}</h2>
                <p>{{ $page->h2_subtext }}</p>
            </div>
            <div class="red-boxes">
                @foreach(json_decode($page->prices) as $item)
                    <div class="agent-price">
                        <h5>{{ $item->title }}</h5>
                        <p class="text-center">{{ $item->from }}</p>
                        <div class="price">
                            <p>{{ $item->price }}$*</p>
                        </div>
                        <p>{{ $item->desc }}</p>
                    </div>
                @endforeach
            </div>
            <div class="red-info bg">
                <div class="small-area">
                    <p>{{ $page->small_text }}</p>
                </div>
            </div>
        </div>
        <div class="person-area">
            <h2>{{ $page->h2_2nd }}</h2>
            <div class="person-info">
                <div class="person-pic">
                    <img src="{{ $page->image_2nd }}" alt="Picture" />
                </div>
                <ul>
                    @foreach(json_decode($page->text_list) as $item)
                        <li>{{ $item->text }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="best-area">
            <h2>{{ $page->h2_3rd }}</h2>
            <div class="person-info">
                <div class="best-list">
                    <ul>
                        @foreach(json_decode($page->text_list_2nd) as $item)
                            <li>{{ $item->title }}</li>
                        @endforeach
                    </ul>
                </div>
                <ul>
                    @foreach(json_decode($page->text_list_2nd) as $item)
                        <li>{{ $item->text }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        @include('partials.bottom_form')

        @include('partials.map')

    </div>

@endsection