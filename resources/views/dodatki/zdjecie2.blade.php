<figure class="figure" >
    <div class="lightbox" data-mdb-lightbox-init>
        <img
            style="max-height: 650px"
            data-mdb-lazy-load-init

            data-mdb-lazy-src="{{URL::asset('zdjecia/'.$zdjecie2)}}"
           {{-- src="{{URL::asset('zdjecia/'.$zdjecie2)}}"--}}
            data-mdb-lazy-placeholder="{{URL::asset('stat/lazy_load.webp')}}"
            class="figure-img img-fluid rounded shadow-3 mb-3"
            alt="{{$zdjecie2_podpis}}"
            data-mdb-img={{URL::asset('zdjecia/'.App\Services\GlownaServices::zdjecieDuze($zdjecie2))}}
        /></div>
    <figcaption class="figure-caption text-end">{{$zdjecie2_podpis}}</br>
        {{\App\Models\Zdjecia::findOrFail($zdjecie2_id)->autor}}</figcaption>
</figure>
