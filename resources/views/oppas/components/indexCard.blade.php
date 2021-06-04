<li class="a-popup u-list-style-none gridCard" data-soort={{$oppas->name}}>
    <a href="/oppas/{{$oppas->id}}">
        <article>  
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">{{$oppas->name}}</h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src="{{$oppas->image}}" alt="{{$oppas->name . $oppas->role}}"/>
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text">{{$oppas->plaatsnaam}}</p>
            </section>
        </article>
    </a>
</li>
