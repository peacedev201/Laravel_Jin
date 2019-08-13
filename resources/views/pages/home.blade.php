<?php
    use Backpack\PageManager\app\Models\Page;
?>

@extends('layouts.app')

@section('title', $page->title)

@section('content')
    <div id="content">

        @include('partials.modals')

        <div class="image-box">
            <div class="left-box">
                <div class="info">

                    @include('partials.lang')

                    <ul>
                        <li><a href="{{ url('outsourcing') }}">Outsourcing</a></li>
                        <li><a href="{{ url('outstaffing') }}">Outstaffing</a></li>
                        <li><a href="#">Recruiting</a></li>
                    </ul>
                    <div class="indent">
                        <h1>{{ $page->h1 }}</h1>
                        <p>{{ $page->subtitle }}</p>
                    </div><a href="#Modal2" data-toggle="modal" class="btn rounded-0">Anfrage Stellen</a></div>
            </div>
            <div class="right-box">
                <div class="pic"><img class="img-responsive" src="{{ $page->image }}" alt="Picture" /></div>
            </div>
        </div>

        @include('partials.top_form')

        <div class="text-area">
            <div class="info-area">
                <h2>{{ $page->h2 }}</h2>
                <p>{{ $page->h2_subtext }}</p>
            </div>
        </div>
        <div class="bg boxes-area">
            <div class="small-area">
                <h4>{{ $page->h4 }}</h4> </div>
        </div>
        <div class="boxes">
            <div class="photo-box">
                <a href="{{ url('outsourcing') }}">
                    <span class="title">{{ Page::findBySlug('outsourcing')->slug }}</span>
                    <img class="img-responsive" src="{{ Page::findBySlug('outsourcing')->withFakes()->thumbnail }}" alt="Picture" />
                    <strong class="dis-non"></strong>
                </a>
                <div class="bg-2"> <span class="span-2">{{ Page::findBySlug('outsourcing')->withFakes()->thumbnail_small_text }}</span>
                    <p>{{ Page::findBySlug('outsourcing')->withFakes()->thumbnail_text }}</p>
                </div>
            </div>
            <div class="photo-box">
                <a href="{{ url('outstaffing') }}"> <span class="title">{{ Page::findBySlug('outstaffing')->slug }}</span>
                    <img class="img-responsive" src="{{ Page::findBySlug('outstaffing')->withFakes()->thumbnail }}" alt="Picture" />
                    <strong class="dis-non"></strong></a>
                <div class="bg-2"> <span class="span-2">{{ Page::findBySlug('outstaffing')->withFakes()->thumbnail_small_text }}</span>
                    <p>{{ Page::findBySlug('outstaffing')->withFakes()->thumbnail_text }}</p>
                </div>
            </div>
            <div class="photo-box">
                <a href="#"> <span class="title">Recruitment</span> <img class="img-responsive" src="images/pictures/it-recruiting-img.png" alt="Picture" /> <strong class="dis-non"></strong></a>
                <div class="bg-2"> <span class="span-2">Personalbeschaffung zur Übernahme</span>
                    <p>Wir bieten moderne Recruiting Kampagnen, klassische Personalberatung und Personal Staffing in Osteuropa an.</p>
                </div>
            </div>
        </div>
        <div class="text-list list-other">
            <div class="info-area">
                <h2>{{ $page->h2_2nd }}</h2>
                <div class="list-post">
                    <div class="im"> <img src="images/pictures/tech.svg" alt="Picture" /> </div>
                    <div class="desc">
                        <div class="desc-box">
                            <ul>
                                <li><strong>{{ json_decode($page->features)[0]->title }}</strong>
                                    <br/> {{ json_decode($page->features)[0]->desc }}</li>
                                <li><strong>{{ json_decode($page->features)[2]->title }}</strong>
                                    <br/>{{ json_decode($page->features)[2]->desc }}</li>
                            </ul>
                        </div>
                        <div class="desc-box">
                            <ul>
                                <li><strong>{{ json_decode($page->features)[1]->title }}</strong>
                                    <br/> {{ json_decode($page->features)[1]->desc }}</li>
                                <li><strong>{{ json_decode($page->features)[3]->title }}</strong>
                                    <br/>{{ json_decode($page->features)[3]->desc }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-other bg">
            <div class="text-bg">
                <p>{{ $page->text_1 }}</p>
            </div>
            <div class="info-area"> <a href="#" class="btn btn-2">Learn more</a> </div>
        </div>
        <div class="large-pic container-fluid nopadding">
            <h2>Clients say about us</h2>
            <div class="slider-wrapper owl-carousel" id="home-slider">
                <div class="item">
                    <div class="photo"><img class="img-responsive" src="images/pictures/photo.jpg" alt="Picture" /></div>
                    <div class="photo-info">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <h3>Victoria Engel</h3> <span>Head of HR Department at Company</span>
                        <h4>LONDON</h4> </div>
                </div>
                <div class="item">
                    <div class="photo"><img class="img-responsive" src="images/pictures/photo.jpg" alt="Picture" /></div>
                    <div class="photo-info">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <h3>Victoria Engel</h3> <span>Head of HR Department at Company</span>
                        <h4>LONDON</h4> </div>
                </div>
                <div class="item">
                    <div class="photo"><img class="img-responsive" src="images/pictures/photo.jpg" alt="Picture" /></div>
                    <div class="photo-info">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <h3>Victoria Engel</h3> <span>Head of HR Department at Company</span>
                        <h4>LONDON</h4> </div>
                </div>
                <div class="item">
                    <div class="photo"><img class="img-responsive" src="images/pictures/photo.jpg" alt="Picture" /></div>
                    <div class="photo-info">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <h3>Victoria Engel</h3> <span>Head of HR Department at Company</span>
                        <h4>LONDON</h4> </div>
                </div>
                <div class="item">
                    <div class="photo"><img class="img-responsive" src="images/pictures/photo.jpg" alt="Picture" /></div>
                    <div class="photo-info">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <h3>Victoria Engel</h3> <span>Head of HR Department at Company</span>
                        <h4>LONDON</h4> </div>
                </div>
                <div class="item">
                    <div class="photo"><img class="img-responsive" src="images/pictures/photo.jpg" alt="Picture" /></div>
                    <div class="photo-info">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <h3>Victoria Engel</h3> <span>Head of HR Department at Company</span>
                        <h4>LONDON</h4> </div>
                </div>
            </div>
        </div>
        <div class="text-list">
            <div class="info-area">
                <h2>{{ $page->h2_3rd }}</h2>
                <div class="list-post">
                    <div class="im"> <img src="{{ $page->image_2nd }}" alt="Picture" /> </div>
                    <div class="desc">
                        {!! $page->description !!}
                    </div>
                </div>
            </div>
        </div>

        @include('partials.bottom_form')

        @include('partials.map')

    </div>
@endsection