
<div class="fs-6 mb-3 mt-4">
    {{--Tytuł galerii:--}}</div>

<div class="lightbox" data-mdb-lightbox-init>
    <div class="row">
@foreach($galeria as $zdjecie)

    <div class="col-lg-3 col-md-4 col-sm-6 " style="max-height: 600px">

      <img
          style="max-height: 500px"
          data-mdb-lazy-load-init
          data-mdb-lazy-src="{{URL::asset('zdjecia/'.$zdjecie->plik)}}"
         {{-- src="{{URL::asset('zdjecia/'.$zdjecie->plik)}}"--}}
          data-mdb-lazy-placeholder="{{URL::asset('stat/lazy_load.webp')}}"
           class="img-thumbnail shadow-1-strong m-1"
          data-mdb-caption="{{$zdjecie->opis}}. {{$zdjecie->autor}}"
           alt="{{$zdjecie->opis}}}}"
           data-mdb-img={{URL::asset('zdjecia/'.App\Services\GlownaServices::zdjecieDuze($zdjecie->plik))}}
      />
<p class="text-muted lh-sm" style="font-size: small">{{$zdjecie->opis}}. {{$zdjecie->autor}}</p>

    </div>
    {{--<div class="">{{$zdjecie->opis}}. {{$zdjecie->autor}}</div>--}}

@endforeach
    </div>

</div>
