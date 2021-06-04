@extends('default')

@section('title')
{{"Alle Huisdieren"}}
@endsection

@section('content')
@include('huisdier.components.indexCheckBox')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($huisdieren as $huisdier)
        @include('huisdier.components.indexCard')
    @endforeach
</ul>
@endsection