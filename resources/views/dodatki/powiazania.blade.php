
<div class="mt-2 mb-3">Zobacz również:</div>

@foreach ($powiazaniaWatki as $trescPowiazana)
    <div class="row">

        <div class="col-lg-10 "><div class="vr" style="width: 5px;"></div>
            <a href="/{{$trescPowiazana->nazwaRoute}}/{{$trescPowiazana->slug}}">{{$trescPowiazana->tytulPowiazania}}  ({{$trescPowiazana->typTresci}})</a>
        </div>
    </div>

@endforeach

