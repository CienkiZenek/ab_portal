@extends('szablon')
@section('title', $film->title)
@section('description', $film->description)
@section('keywords', $film->keywords)

@section('tresc')



<div class="row justify-content-center">

    <h1 class="h1_podstrony mb-3">Nazwa filmu: {{$film->tytul}}</h1>

    <div class="row mb-3 ">
        <div class="col-12 ">{!!$film->opis!!}</div>
    </div>
    <div class="row mb-4 ">
        <div class="col-12">


            <div class="ratio ratio-16x9">
                <iframe
                    src="{!!$film->film_kod!!}"
                    title=""
                    allowfullscreen
                ></iframe>
            </div>



        </div>
    </div>


@if($powiazaniaWatki->count()>0)
    @include('dodatki.powiazania', ['powiazaniaWatki'=>$powiazaniaWatki])
@endif


@endsection
