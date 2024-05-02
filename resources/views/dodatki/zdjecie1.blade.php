{{--<div class="lightbox" data-mdb-lightbox-init>

                <img src="{{URL::asset('zdjecia/'.$zdjecie1)}}"
                     class="img-fluid shadow-1-strong m-1 float-start"
                     alt="{{$zdjecie1_podpis}}"/>

</div>--}}

<figure class="figure" >
    <div class="lightbox" data-mdb-lightbox-init>
    <img
        data-mdb-lazy-load-init

        data-mdb-lazy-src="{{URL::asset('zdjecia/'.$zdjecie1)}}"
       {{-- src="{{URL::asset('zdjecia/'.$zdjecie1)}}"--}}
        data-mdb-lazy-placeholder="{{URL::asset('stat/lazy_load.webp')}}"

        class="figure-img img-fluid rounded shadow-3 mb-3"
        alt="{{$zdjecie1_podpis}}"
        data-mdb-img={{URL::asset('zdjecia/'.App\Services\GlownaServices::zdjecieDuze($zdjecie1))}}
    /></div>
    <figcaption class="figure-caption text-end">{{$zdjecie1_podpis}}</figcaption>
</figure>

