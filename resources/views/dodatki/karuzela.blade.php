

<!-- Carousel wrapper -->
<div id="carousel" class="carousel slide carousel-fade" data-mdb-ride="carousel"
     data-mdb-carousel-init>
    <!-- Indicators -->
    <div class="carousel-indicators">

       {{-- <button type="button" data-mdb-target="#carousel" data-mdb-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>

        <button type="button" data-mdb-target="#carousel" data-mdb-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carousel" data-mdb-slide-to="2"
                aria-label="Slide 3"></button>--}}

        @for ($i = 0; $i < $karuzelaZbior->count(); $i++)
            @if($karuzelaZbior[$i]->numerDodany==0)
            <button type="button" data-mdb-target="#carousel" data-mdb-slide-to="{{$i}}"
                    aria-label="Slide {{$i+1}}"
                    class="active" aria-current="true"></button>
            @else
                <button type="button" data-mdb-target="#carousel" data-mdb-slide-to="{{$i}}"
                        aria-label="Slide {{$i+1}}"></button>

            @endif
        @endfor



    </div>

    <!-- Inner -->
    <div class="carousel-inner rounded-5 shadow-4-strong">
        @foreach($karuzelaZbior as $item)
        <!-- Single item -->

        @if($item->numerDodany==0)
                <div class="carousel-item active">
                    @else
                        <div class="carousel-item">
         @endif

            <img src="zdjecia/{{$item->zdjecie2}}" class="d-block w-100"
                 alt="" />
            <div class="carousel-caption">
                <a href="/{{$item->nazwaRoute}}/{{$item->slug}}" class="text-white ">
                    <h6 class="bg-dark-subtle rounded-2">{{$item->tytulDodany}}</h6>

                </a>
            </div>
                  {{--<div class="carousel-caption d-none d-md-block">
                <a href="/{{$item->nazwaRoute}}/{{$item->slug}}" class="text-white "><h6 class="bg-dark-subtle rounded-2">{{$item->tytulDodany}}</h6></a>
            </div>--}}
                        </div>

        @endforeach
    </div>
        <!-- Single item -->
      {{--  <div class="carousel-item active">
            <img src="zdjecia/{{$karuzelaZbior[0]->zdjecie2}}" class="d-block w-100"
                 alt="" />
            <div class="carousel-caption d-none d-md-block">
                <a href="" class="text-white "><h6 class="bg-dark-subtle rounded-2">{{$karuzelaZbior[0]->tytulDodany}}</h6></a>

            </div>
        </div>
        <div class="carousel-item">
            <img src="zdjecia/{{$karuzelaZbior[1]->zdjecie2}}" class="d-block w-100"
                 alt="" />
            <div class="carousel-caption d-none d-md-block">
                <a href="" class="text-white "><h6 class="bg-dark-subtle rounded-2">{{$karuzelaZbior[1]->tytulDodany}}</h6></a>

            </div>
        </div>
        <div class="carousel-item">
            <img src="zdjecia/{{$karuzelaZbior[2]->zdjecie2}}" class="d-block w-100"
                 alt="" />
            <div class="carousel-caption d-none d-md-block">
                <a href="" class="text-white "><h6 class="bg-dark-subtle rounded-2">{{$karuzelaZbior[2]->tytulDodany}}</h6></a>

            </div>
        </div>
--}}

        <!-- Single item -->
        {{--<div class="carousel-item">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100"
                 alt="Canyon at Nigh" />
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>--}}

        <!-- Single item -->
        {{--<div class="carousel-item">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100"
                 alt="Cliff Above a Stormy Sea" />
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>--}}




    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carousel"
            data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Poprzedni</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carousel"
            data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Następny</span>
    </button>
</div>
