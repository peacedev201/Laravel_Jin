<div class="forma-box bg">
    <div class="text-bg">
        <p>Unser Anspruch ist es, eine Qualität zu liefern, die Sie begeistern wird, zu einem Preis, den Sie lieben werden!</p>
    </div>
    <div class="info-area">
        <div class="forma">
            <h5>Möchten Sie mehr über unsere Leistungen erfahren?</h5>
            <div class="tel">
                <p>Callback</p><a href="tel:{{ preg_replace('/\D/', '', $page->callback_number) }}">{{ $page->callback_number }}</a></div>
            <form action="#">
                <div class="form-box">
                    <div class="row-line">
                        <input type="text" id="name" placeholder="Name*" name="name" />
                    </div>
                    <div class="row-line">
                        <input type="text" id="name2" class="mask" placeholder="Telefon*" name="name2" />
                    </div>
                    <div class="row-line row-other">
                        <textarea id="message" placeholder="(Optional) Desired time to callback or other details" name="message"></textarea>
                    </div>
                    <input class="wpcf7-submit" value="Rückruf anfordern" type="submit">
                </div>
            </form>
        </div>
    </div>
</div>