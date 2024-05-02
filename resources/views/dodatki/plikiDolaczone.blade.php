<div class="mb-2">Załączone pliki: </div>

@foreach($tresc->pliki as $plik)
<div class="row mb-1">
    <div class="col-10"><div class="vr" style="width: 5px;"></div>
    <a href="{{ URL::asset('pliki/'.$plik->plik)}}{{--{{$plik->plik}}--}}"
       target="_blank"
    class="color-glowny"
    >{{\App\Services\GlownaServices::limitSpacja($plik->opis, 60)}}


    </a>
    </div>
    <div class="col-2">
        @switch($plik->typ)
            @case('pdf')
                <i class="fas fa-file-pdf fa-lg color-glowny"></i>
                @break
            @case('word')
                <i class="fas fa-file-word fa-lg color-glowny"></i>
                @break
            @default
                <i class="fas fa-file fa-lg color-glowny"></i>
        @endswitch
</div>
</div>

@endforeach
