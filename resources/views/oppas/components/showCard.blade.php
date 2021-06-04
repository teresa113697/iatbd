<article class="showCard a-popup">
    <section class="showCard__header">
        <h1 class="showCard__heading">{{$oppas->name}}</h1>
    </section>
    <figure class="showCard__figure">
        <img class="showCard__image" src="{{$oppas->image}}" alt="{{$oppas->name . ' ' . $oppas->role}}" />
    </figure>
    <section class="showCard__text">
        <h2 class="showCard__textHeader">Naam</h2>
        <p>{{$oppas->name}}</p>
        <h2 class="showCard__textHeader">Email</h2>
        <p>{{$oppas->email}}</p>
        <h2 class="showCard__textHeader">Leeftijd</h2>
        <p>{{$oppas->leeftijd}}</p>
        <h2 class="showCard__textHeader">Telefoonnummer</h2>
        <p>{{$oppas->telefoonnummer}}</p>
        <h2 class="showCard__textHeader">Plaats</h2>
        <p>{{$oppas->plaatsnaam}}</p>
        <h2 class="showCard__textHeader">Adres</h2>
        <p>{{$oppas->adres}}</p>
    </section>

    <section class="showCard__btnSection">
    @if(Auth::user()->role === "Admin")
        <form id="verwijder_form" action="/oppas/remove" method="POST">
        @csrf

            <input type="hidden" name="oppas" value="{{$oppas->id}}">
            <a class="showCard__button" href="javascript:{}" onclick="document.getElementById('verwijder_form').submit();">
                Blocken
            </a>
        </form>

    @endif

        <a class="showCard_back_to_home" href="/huisdieren"> Back to home</a>
    </section>

</article>