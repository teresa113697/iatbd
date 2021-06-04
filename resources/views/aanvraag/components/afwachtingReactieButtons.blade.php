<section class="showCard__btnSection">
    <form id="accept_form" class="showCard__buttonForm" action="/aanvraag/update" method="POST">
        @csrf

        <input type="hidden" name="aanvraag" value="{{$aanvraag->id}}">
        <input type="hidden" name="huisdier" value="{{$aanvraag->Huisdier->id}}">
        <input type="hidden" name="status" value="geaccepteerd">
        <a class="showCard__button" href="javascript:{}" onclick="document.getElementById('accept_form').submit();">
            Accepteren
        </a>
    </form>

    <form id="weiger_form" class="showCard__buttonForm" action="/aanvraag/remove" method="POST">
        @csrf

        <input type="hidden" name="aanvraag" value="{{$aanvraag->id}}">
        <a class="showCard__button" href="javascript:{}" onclick="document.getElementById('weiger_form').submit();">
            Weigeren
        </a>
    </form>

    <a class="showCard_back_to_home" href="/huisdieren"> Back to home</a>

</section>
