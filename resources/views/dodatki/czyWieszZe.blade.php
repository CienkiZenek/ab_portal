    <div class="tlo-glowne0 border border-1  rounded-1">
        <span class="text-decoration-none color-glowny ms-2"><i class="fas fa-circle-question"></i> Czy wiesz, że... ?</span>
    </div>
@if(session('czywieszTresc')=='')
    {{--<p>{{App\Services\GlownaServices::czyWieszLosowo()->tytul}}</p>--}}

    @php

        session()->put('czywieszTresc',App\Services\GlownaServices::czyWieszLosowo()->tresc);
    @endphp
    <div class="color-glowny mt-2 ms-2 me-2 lh-sm " style="text-indent:1em;  text-align: justify;">{!! session()->get('czywieszTresc')!!}</div>
@else
    <div class="color-glowny mt-2 ms-2 me-2 lh-sm " style="text-indent:1em;  text-align: justify;">{!!  session()->get('czywieszTresc')!!}</div>


@endif

