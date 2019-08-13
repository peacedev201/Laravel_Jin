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
                        <img src="{{ $page->thumbnail }}" alt="Picture" />
                        <div class="out-text">
                            <div class="proj-text">
                                <p>{{ $page->thumbnail_text }}</p>
                            </div>
                            <a class="btn rounded-0" data-toggle="modal" href="#Modal2"><span>Anfrage Stellen</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="alles-post">
            <div class="alles-area">
                <div class="alles-tit">
                    <h2>{{ $page->h2 }}</h2>
                    <p>{{ $page->h2_subtext }}</p>
                </div>
                <div class="alles-pic">
                    <img src="{{ $page->image }}" alt="Picture" />
                </div>
                <div class="alles-text">
                    {!! $page->text !!}
                </div>
                <div class="alles-bg bg">
                    <p>{{ $page->image_desc }}</p>
                </div>
            </div>
        </div>
        <div class="value-area">
            <h2>{{ $page->h2_2nd }}</h2>
            <div class="value-text">
                {!! $page->text_2 !!}
            </div>
            <div class="value-info">
                <div class="steps-post">
                    <div class="step">
                        <img src="images/pictures/credit-card.svg" alt="Picture" />
                        <h5>Festpreis-Modelle</h5>
                    </div>
                    <div class="step">
                        <img src="images/pictures/hourglass.svg" alt="Picture" />
                        <h5>Zeit &amp; Material</h5>
                    </div>
                    <div class="step">
                        <img src="images/pictures/skills-copy.svg" alt="Picture" />
                        <h5>Dedizierte Teams</h5>
                    </div>
                </div>
            </div>
        </div>


        @include('partials.bottom_form')

        @include('partials.map')

    </div>

@endsection