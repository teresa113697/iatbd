@extends('default')

@section('title')
{{"Alle Oppassers"}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($oppassers as $oppas)
        @include('oppas.components.indexCard')
    @endforeach
</ul>
@endsection