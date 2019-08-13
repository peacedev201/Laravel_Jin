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
        <div class="soft-area">
            <div class="soft-post">
                <div class="soft-boxes">
                    <h2>{{ $page->h2 }}</h2>
                    <p>{{ $page->h2_subtext }}</p>
                </div>
                <div class="steps-post">
                    <div class="step">
                        <img src="images/pictures/credit-card.svg" alt="Picture" />
                        <h5>Festpreis-Modelle</h5>
                        <span>Wir sorgen für mehr Flexibilität</span>
                        <p>Komplette Betreuung Ihres IT-Projektes in Kombination mit unseren IT-Outsourcing Angeboten
                            durch erfahrene Projektleiter auf Wunsch auch vor Ort.
                        </p>
                    </div>
                    <div class="step">
                        <img src="images/pictures/hourglass.svg" alt="Picture" />
                        <h5>Zeit &amp; Material</h5>
                        <span>Wir sorgen für mehr Flexibilität</span>
                        <p>Buchen Sie kurzfristige Ressourcen auf Abruf. Sie zahlen nur die reine Arbeitszeit nach festgesetzten
                            Stundensätzen und Arbeitsnachweis.
                        </p>
                    </div>
                    <div class="step">
                        <img src="images/pictures/skills-copy.svg" alt="Picture" />
                        <h5>Dedizierte Teams</h5>
                        <span>Wir erhöhen Ihre Produktivität</span>
                        <p>Unsere Nearshore dedizierten Teams sind die perfekte Mischung aus Flexibilität,
                            Skalierbarkeit und technischer Fachkompetenz.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="red-area">
            <div class="red-text">
                <h2>{{ $page->h2_2nd }}</h2>
                <p>{{ $page->h2_2nd_subtext }}</p>
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
            <h2>{{ $page->h2_3rd }}</h2>
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
            <h2>{{ $page->h2_4th }}</h2>
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