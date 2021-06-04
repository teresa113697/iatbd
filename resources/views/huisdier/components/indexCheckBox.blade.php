<section class="filter-section">
    @foreach($soorten as $soort)
        <section class="filter-section__wrapper"> 
            <label class="filter-section__label" for="{{$soort->soort}}">{{$soort->soort}}</label>
            <input class="filter-section__input" id="{{$soort->soort}}" name="{{$soort->soort}}" type="checkbox"/>
        </section>
    @endforeach
</section>
<script src="/js/filter.js"></script>
