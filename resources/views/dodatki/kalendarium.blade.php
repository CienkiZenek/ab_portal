<div class="tlo-glowne0 border border-1 color-glowny rounded-1">
    {{--<span class="text-decoration-none color-glowny ms-2">
        Kalendarium</span>--}}
    <i class="far fa-calendar-days"></i> Kalendarium na dziś:
</div>

    {{-- <p>{{\Carbon\Carbon::today()->format('Y-m-d')}}</p>--}}
    {{-- <p>{{\Carbon\Carbon::today()::now()->addDays(2)->format('Y-m-d')}}</p>--}}


    @if($kalendariumDzis->count()>0)
    @foreach($kalendariumDzis as $kalendarium)
        <div class="color-glowny mt-2 ms-2 me-2 lh-sm " style="text-indent:0em;  text-align: justify;">
           {{-- {{\Carbon\Carbon::createFromFormat('Y-m-d', $kalendarium->data)->format('Y')}} - {{$kalendarium->tytul}}--}}
            <strong>{{\Str::take($kalendarium->data,4)}}</strong> - {{$kalendarium->tytul}}
        </div>
    @endforeach
    @endif

    {{--@if($kalendariumJutro->count()>0)
    <div>Kalendarium na jutro</div>
    @foreach($kalendariumJutro as $kalendarium)
        <div>
            {{$kalendarium->data}}
        </div>
    @endforeach
    @endif

    @if($kalendariumPojutrze->count()>0)
    <div>Kalendarium na pojutrze</div>
    @foreach($kalendariumPojutrze as $kalendarium)
        <div>
            {{$kalendarium->data}}
        </div>
    @endforeach
    @endif
--}}

