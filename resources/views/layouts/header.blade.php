<header id="header">
    <div class="left-line">
        <a href="{{ url('/') }}" class="logotype navbar-brand"><img src="{{ asset('images/bsbv-logo.svg') }}" alt="BSBV"></a>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="active"> <a href="{{ url('about-us') }}">About Us</a> </li>
                    <li> <a href="{{ url('outsourcing') }}">Outsourcing</a> </li>
                    <li> <a href="{{ url('outstaffing') }}">Outstaffing</a> </li>
                    <li> <a href="#">Recruiting</a> </li>
                    <li> <a href="{{ url('contacts') }}">Contacts</a> </li>
                </ul>
                {{--<ul class="navbar-nav mr-auto large">--}}
                    {{--<li> <a href="#">Firmen</a> </li>--}}
                    {{--<li> <a href="{{ url('agenturen') }}">Agenturen</a> </li>--}}
                    {{--<li> <a href="#">Recruiter</a> </li>--}}
                {{--</ul>--}}
            </div>
        </nav>
        <div class="callback">
            <a href="#Modal1" data-toggle="modal"><img src="{{ asset('images/icons/callback.svg') }}" alt="Picture" /></a>
        </div>
        <div class="social">
            <ul>
                <li class="l">
                    <a href="http://linkedin.com"></a>
                </li>
                <li class="f">
                    <a href="http://facebook.com"></a>
                </li>
                <li class="t">
                    <a href="http://twitter.com"></a>
                </li>
            </ul>
        </div>
        <div class="mobile-tel">
            <p>Callback 49 (0) 931 - 45 24 24 3</p>
        </div>
        <div class="scroll">
            <a href="#footer"><img src="{{ asset('images/icons/scroll.svg') }}" alt="Picture" /></a>
        </div>
    </div>
</header>