<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 box-none">
                <p>{{ Config::get('settings.footer_text') }}</p>
            </div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-12">
                <div class="pull-right">
                    <div class="box">
                        <h3>BSBV</h3>
                        <ul>
                            <li><a href="{{ url('about-us') }}">About Us</a></li>
                            <li><a href="{{ url('outsourcing') }}">Outsourcing</a></li>
                            <li><a href="{{ url('outstaffing') }}">Outstaffing</a></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h3>Informationen</h3>
                        <ul>
                            <li><a href="#">Impressum</a></li>
                            <li><a href="#">Nutzungsbedingungen</a></li>
                            <li><a href="#">Promotions</a></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h3>Hilfe &amp; Support</h3>
                        <ul>
                            <li><a href="#">Hilfe &amp; Support</a></li>
                            <li><a href="#">Nutzungsbedingungen</a></li>
                        </ul>
                    </div>
                    <div class="box">
                        <ul>
                            <li><a href="#">Datenschutz</a></li>
                            <li><a href="#">Haftungsausschluss</a></li>
                            <li><a href="#">Cookie-Politik</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container copy-box">
        <div class="pull-left">
            <p>&copy; {{ date('Y') }} Copyright by <a href="#">BSBV</a> Inc.</p>
        </div>
        <ul>
            <li><a href="#">All Rights Reserved.</a></li>
        </ul>
    </div>
</footer>