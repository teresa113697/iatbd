@extends('default')

@section('title')
Huisdier Opgeven
@endsection

@section('content')

<article class="create-form a-popup">
    <form class="create-form_form" action="/huisdier" method="POST">
        @csrf

        <section class="create-form_section">
            <label for="name">Naam</label>
            <input class="create-form_input" name="name" id="name" type="text" required />
        </section>

        <section class="create-form_section">
            <label for="kind">Soort</label> 
            <select class="create-form_input" name="kind" id="kind">
                @foreach($soorten as $soort)
                    <option value="{{$soort->soort}}">{{$soort->soort}}</option>
                @endforeach
            </select>
        </section>

        <section class="create-form_section">
            <label for="date">Oppasdatum</label>
            <input class="create-form_input" name="date" id="date" type="date" required />
        </section>

        <section class="create-form_section">
            <label for="uurtarief">Uurtarief</label>
            <input class="create-form_input" name="uurtarief" id="uurtarief" type="number" step="any" required />
        </section>

        <section class="create-form_section">
            <label for="dagen">Aantal dagen</label>
            <input class="create-form_input" name="dagen" id="dagen" type="number" required />
        </section>

        <section class="create-form_section">
            <label for="description">Description</label>
            <textarea class="create-form_input create-form_input--big" name="description" id="description" type="text-area"></textarea>
        </section>

        <section class="create-form_section">
            <label for="image">Afbeelding</label>
            <select class="create-form_input" name="image" id="image">
                @foreach($images as $image)
                    <option value="{{$image->image}}">{{$image->image}}</option>
                @endforeach
            </select>
        </section>

        <section class="create-form_section">
            <button class="create-form__button" type="submit">Huisdier Opgeven</button>   
        </section>

    </form>
</article>
@endsection