<div class="fs-6 mb-3 mt-4">{{--Galeria:--}}</div>

<div class="lightbox" data-mdb-lightbox-init>
    <div class="row">
@foreach($galeria as $zdjecie)

    <div class="col-lg-3 col-md-4 col-sm-6" >

      <img
          style="max-height: 600px"
          data-mdb-lazy-load-init
          data-mdb-lazy-src="{{URL::asset('zdjecia/'.$zdjecie->plik)}}"
         {{-- src="{{URL::asset('zdjecia/'.$zdjecie->plik)}}"--}}
          data-mdb-lazy-placeholder="{{URL::asset('stat/lazy_load.webp')}}"
           class="img-thumbnail shadow-1-strong m-1"
           alt="{{$zdjecie->opis}}. {{$zdjecie->autor}}"
           data-mdb-img={{URL::asset('zdjecia/'.App\Services\GlownaServices::zdjecieDuze($zdjecie->plik))}}
      />


    </div>

@endforeach
    </div>

</div>
