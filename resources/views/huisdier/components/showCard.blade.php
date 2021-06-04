<article class="showCard a-popup">
    <section class="showCard__header">
        <h1 class="showCard__heading">{{$huisdier->naam}}</h1>
    </section>
    <figure class="showCard__figure">
        <img class="showCard__image" src="{{$huisdier->image}}" alt="{{$huisdier->naam . ' ' . $huisdier->soort}}" />
    </figure>
    <section class="showCard__text">
        <h2 class="showCard__textHeader">Wanneer?</h2>
        <p>{{$huisdier->oppasdatum}}</p>
        <h2 class="showCard__textHeader">Uurtarief</h2>
        <p>€{{$huisdier->uurtarief}}</p>
        <h2 class="showCard__textHeader">Duur</h2>
        <p>{{$huisdier->aantal_dagen}} dagen</p>
        <h2 class="showCard__textHeader">Belangrijke zaken</h2>
        <p>{{$huisdier->description}}</p>
    </section>
    <section class="showCard__btnSection">
    @if(Auth::user()->role === "Oppas")
        <form id="create_aanvraag_form" action="/create/aanvraag" method="POST">
        @csrf

            <input type="hidden" name="huisdier_eigenaar" value="{{$huisdier->Eigenaar->id}}">
            <input type="hidden" name="huisdier" value="{{$huisdier->id}}">
            <input type="hidden" name="status" value="geplaatst">
            <a class="showCard__button" href="javascript:{}" onclick="document.getElementById('create_aanvraag_form').submit();">
                Aanvragen
            </a>
        </form>
    @elseif(Auth::user()->role === "Admin")
        <form id="verwijder_form" action="/huisdier/remove" method="POST">
        @csrf

            <input type="hidden" name="huisdier" value="{{$huisdier->id}}">
            <a class="showCard__button" href="javascript:{}" onclick="document.getElementById('verwijder_form').submit();">
                Verwijderen
            </a>
        </form>
        
    @endif
        <a class="showCard_back_to_home" href="/huisdieren"> Back to home</a>
    </section>
</article>