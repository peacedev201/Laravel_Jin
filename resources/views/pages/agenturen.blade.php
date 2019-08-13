@extends('layouts.app')

@section('title', $page->title)

@section('content')

    <div id="content">

        @include('partials.modals')

        <div class="agent-area">
            <div class="agent-form">
                <div class="fix-form">
                    <div class="arrow-form"><a href="#">&nbsp;</a></div>
                    <h5>Möchten Sie mehr über unsere Leistungen erfahren?</h5>
                    <form action="#">
                        <div class="form-box">
                            <div class="row-line">
                                <input type="text" id="name3" placeholder="Name*" name="name3" />
                            </div>
                            <div class="row-line">
                                <input type="email" id="email" placeholder="Email*" name="email" />
                            </div>
                            <div class="row-line">
                                <input type="text" id="name4" class="mask" placeholder="Telefon*" name="name4" />
                            </div>
                            <div class="row-line row-other">
                                <textarea id="message" placeholder="(Optional) Bemerkungen / Wünsche" name="message"></textarea>
                            </div>
                        </div>
                        <input class="wpcf7-submit" value="Rückruf anfordern" type="submit">
                    </form>
                </div>
            </div>
            <div class="agent-info">
                <div class="info">

                    @include('partials.lang')

                </div>
                <div class="non-link">
                    <a class="btn btn-2" href="#"><span>Rückruf anfordern</span></a>
                </div>
                <div class="agent-text">
                    <h2>{{ $page->h2 }}</h2>
                    <p>{{ $page->h2_subtext }}</p>
                </div>
                <div class="agent-tit">
                    <div class="bg">
                        <div class="small-area">
                            <ul>
                                <li><a href="#">Schnell</a></li>
                                <li><a href="#">Zuverlässig</a></li>
                                <li><a href="#">Diskret</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="agent-post">
                    <div class="agent-pic">
                        <img src="images/pictures/2002.png" alt="Picture" />
                    </div>
                    <div class="small-area">
                        <p>{{ $page->agent_text }}</p>
                    </div>
                </div>

                <div class="agent-text">
                    <h2>{{ $page->h2_2nd }}</h2>
                    <p>{{ $page->h2_2nd_subtext }}</p>
                    <div class="row">
                        @foreach(json_decode($page->prices) as $item)
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="agent-price">
                                    <h5>{{ $item->title }}</h5>
                                    <p class="text-center">{{ $item->from }}</p>
                                    <div class="price">
                                        <p>{{ $item->price }}$*</p>
                                    </div>
                                    <p>{{ $item->desc }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="small-text">
                        <p>{{ $page->small_text }}</p>
                    </div>
                </div>

                <div class="agent-text agent-text-other">
                    <h2>{{ $page->h2_3rd }}</h2>
                    <p>{{ $page->h2_3rd_subtext }}</p>
                    <div class="steps-post">
                        <div class="step">
                            <div class="number-box">
                                <span class="step-number">1.</span>
                                <img src="images/pictures/clipboard.svg" alt="Picture" />
                                <span>Anforderungen definieren</span>
                            </div>
                            <p>Teilen Sie uns unkompliziert mit, welches Projekt Sie in welcher Technologie umsetzen möchten.</p>
                        </div>
                        <div class="step">
                            <div class="number-box">
                                <span class="step-number">2.</span>
                                <img src="images/pictures/skills.svg" alt="Picture" />
                                <span>Mitarbeiter auswählen</span>
                            </div>
                            <p>Anhand Ihrer Vorgaben stellen wir Ihnen den richtigen Mitarbeiter aus unserem Team zur Verfügung.</p>
                        </div>
                        <div class="step">
                            <div class="number-box">
                                <span class="step-number">3.</span>
                                <img src="images/pictures/browser.svg" alt="Picture" />
                                <span>Beauftragung &amp; Umsetzung</span>
                            </div>
                            <p>Wir führen eine effiziente Erfassung durch unsere Time &amp; Task Tracking Software durch</p>
                        </div>
                        <div class="step">
                            <div class="number-box">
                                <span class="step-number">4.</span>
                                <img src="images/pictures/goal-1.svg" alt="Picture" />
                                <span>Pünktliche Lieferung</span>
                            </div>
                            <p>Alle Aufgaben werden von uns sowohl zeitlich als auch qualitativ im vereinbarten Rahmen geliefert.</p>
                        </div>
                    </div>
                </div>
                <div class="agent-text-last bg">
                    <p>{{ $page->agent_text_last }}</p>
                </div>
                <div class="agent-text agent-text-last-2">
                    <h2>{{ $page->h2_4th }}</h2>
                </div>
                <div class="agent-image">
                    <img src="{{ $page->image }}" alt="Picture" />
                </div>
            </div>
        </div>

        @include('partials.map')

    </div>

@endsection