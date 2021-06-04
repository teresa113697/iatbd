<li class="a-popup u-list-style-none gridCard">
    <a href="/aanvraag/{{$aanvraag->id}}">
        <article>  
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">{{$aanvraag->Huisdier->naam}}</h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src="{{$aanvraag->Huisdier->image}}" alt="{{$aanvraag->Huisdier->naam . $aanvraag->Huisdier->soort}}"/>
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text">{{$aanvraag->Huisdier->description}}</p>
            </section>
        </article>
    </a>
</li>
