@extends('default')

@section('title')
Comment plaatsen
@endsection

@section('content')

<article class="create-form a-popup">
    <form class="create-form_form" action="/comment/{{$oppas_id->id}}" method="POST">
        @csrf

        <input type="hidden" name="aanvraag_id" value="{{$aanvraag_id}}">
    	
        <section class="create-form_section">
            <label for="comment">Comment op {{$oppas_id->name}}</label>
            <textarea class="create-form_input create-form_input--big" name="comment" id="comment" type="text-area" required></textarea>
        </section>

        <section class="create-form_section">
            <button class="create-form__button" type="submit">Comment plaatsen</button>   
        </section>

    </form>

</article>
@endsection