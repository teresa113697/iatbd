<article class="showCard a-popup">
    <section class="showCard__header">
        <h1 class="showCard__heading">{{$aanvraag->Oppas->name}}</h1>
    </section>
    <figure class="showCard__figure">
        <img class="showCard__image" src="{{$aanvraag->Oppas->image}}" alt="{{$aanvraag->Oppas->naam . ' ' . $aanvraag->Oppas->soort}}" />
    </figure>
    <section class="showCard__text">
        <h2 class="showCard__textHeader">Wie?</h2>
        <p>{{$aanvraag->Oppas->name}}</p>
        <h2 class="showCard__textHeader">Email</h2>
        <p>{{$aanvraag->Oppas->email}}</p>
        <h2 class="showCard__textHeader">Telefoonnummer</h2>
        <p>{{$aanvraag->Oppas->telefoonnummer}}</p>
        <h2 class="showCard__textHeader">Wanneer?</h2>
        <p>{{$aanvraag->Huisdier->oppasdatum}}</p>
    </section>
    @if ($aanvraag->status === 'geplaatst')
        @include('aanvraag.components.afwachtingReactieButtons')
    @elseif ($aanvraag->status === 'geaccepteerd')
        @include('aanvraag.components.commentButton')
    @endif

</article>