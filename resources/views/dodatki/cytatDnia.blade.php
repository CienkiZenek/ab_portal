
    <div class="tlo-glowne0 border border-1  rounded-1">
         <span class="text-decoration-none color-glowny ms-2"><i class="fas fa-quote-right"></i> Cytat dnia: </span>
    </div>


    @if(session('cytatPodpis')=='')
        {{--<p>Czy wiesz, że: {{App\Services\GlownaServices::czyWieszLosowo()->tytul}}</p>--}}

        @php

            session()->put('cytatPodpis',App\Services\GlownaServices::cytatDniaLosowo()->podpis);
            session()->put('cytatTresc',App\Services\GlownaServices::cytatDniaLosowo()->tresc);

        @endphp
        <div class="color-glowny mt-2 ms-2 me-2 lh-sm " style="text-indent:1em;  text-align: justify;">{{session()->get('cytatTresc')}}</div>
        <div class="text-end color-glowny8 fst-italic me-2" >{{session()->get('cytatPodpis')}}</div>

    @else
        <div class="color-glowny mt-2 ms-2 me-2 lh-sm " style="text-indent:1em;  text-align: justify;"> {{session()->get('cytatTresc')}}</div>
        <div class="text-end color-glowny8 fst-italic me-2" >{{session()->get('cytatPodpis')}}</div>


    @endif


