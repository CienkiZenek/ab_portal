<div class="d-flex justify-content-center">
<div class="card mb-3 text-bg-light" style="max-width: 576px;">
    <div class="row g-0">
        <div class="col-md-4">
            <a href="{{route('naszaKsiazka')}}"  data-mdb-ripple-init  data-mdb-ripple-color="white"><img
                src="{{ URL::asset('/stat/okladka-ksiazki-bozy-wojownik.webp')}}"
                alt="Okładka książki 'Boży wojownik. Opowieść o św. Andrzeju Boboli' "
                class="img-fluid rounded"
                /></a>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title color-glowny">"Boży wojownik"</h5>
                <p class="card-text fst-italic">
                    (...) Już miał położyć się do łóżka, gdy zjawiła się przed nim
                    postać w jezuickim stroju. Gość powiedział, że jest Andrzejem
                    Bobolą i kazał zakonnikowi otworzyć okno.
                    (...)
                </p>
                <a href="{{route('naszaKsiazka')}}" class="btn btn-primary mb-3" data-mdb-ripple-init><i class="fas fa-book-open"></i> Więcej o książce</a>
                <a href="{{route('gdzieKupic')}}" class="btn btn-primary" data-mdb-ripple-init><i class="fas fa-cart-arrow-down"></i> Gdzie kupić książkę?</a>
                {{--<p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </p>--}}
            </div>
        </div>
    </div>
</div>
</div>
