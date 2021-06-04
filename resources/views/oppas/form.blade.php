@extends('default')

@section('title')
Als Oppas Opgeven
@endsection

@section('content')

<article class="create-form a-popup">
    <form class="create-form_form" action="/oppas" method="POST">
        @csrf

        <input type="hidden" name="all_huisdieren" value="{{Auth::user()->allHuisdieren}}">

        <section class="create-form_section">
            <label for="`plaatsnaam`">Plaatsnaam</label>
            <input class="create-form_input" name="plaatsnaam" id="plaatsnaam" type="text" required />
        </section>

        <section class="create-form_section">
            <label for="adres">Adres</label>
            <input class="create-form_input" name="adres" id="adres" type="text" required />
        </section>

        <section class="create-form_section">
            <label for="leeftijd">Leeftijd</label>
            <input class="create-form_input" name="leeftijd" id="leeftijd" type="number" required />
        </section>

        <section class="create-form_section">
            <label for="telefoonnummer">telefoonnummer</label>
            <input class="create-form_input" name="telefoonnummer" id="telefoonnummer" type="text" required />
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
            <button class="create-form__button" type="submit">Opgeven</button>   
        </section>

    </form>
</article>
@endsection