@extends('default')

@section('title')
    {{$oppas->name}}
@endsection

@section('content')
    @include('oppas.components.showCard')
    @include('oppas.components.commentSection')
@endsection
