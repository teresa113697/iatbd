<li class="a-popup u-list-style-none gridCard" data-soort={{$huisdier->soort}}>
    <a href="/huisdier/{{$huisdier->id}}">
        <article>  
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">{{$huisdier->naam}}</h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src="{{$huisdier->image}}" alt="{{$huisdier->naam . $huisdier->soort}}"/>
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text">{{$huisdier->description}}</p>
            </section>
        </article>
    </a>
</li>
