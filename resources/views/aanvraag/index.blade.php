@extends('default')

@section('title')
{{"Aanvragen"}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($aanvragen as $aanvraag)
        @include('aanvraag.components.indexCard')
    @endforeach
</ul>
@endsection