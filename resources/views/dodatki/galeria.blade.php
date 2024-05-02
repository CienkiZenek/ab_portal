<div class="fs-6 mb-2 mt-3">Galeria:</div>

<div class="lightbox" data-mdb-lightbox-init>
    <div class="row">
@foreach($galeria as $zdjecie)

    <div class="col-lg-3 col-md-4 col-sm-6" >

      <img
          data-mdb-lazy-load-init
          data-mdb-lazy-src="{{URL::asset('zdjecia/'.$zdjecie->plik)}}"
         {{-- src="{{URL::asset('zdjecia/'.$zdjecie->plik)}}"--}}
          data-mdb-lazy-placeholder="{{URL::asset('stat/lazy_load.webp')}}"
           class="img-thumbnail shadow-1-strong m-1"
           alt="{{$zdjecie->opis}}"
           data-mdb-img={{URL::asset('zdjecia/'.App\Services\GlownaServices::zdjecieDuze($zdjecie->plik))}}
      />


    </div>

@endforeach
    </div>

</div>
