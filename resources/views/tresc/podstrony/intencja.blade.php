@extends('szablon')
@section('title', 'Prześlij prośbę do św. Andrzeja Boboli')
@section('description', 'Formularz do przesyłania prośb i intencji do św. Andrzeja Boboli oraz świadectwa otrzymanych łaska za wstawinnictwem św. Andrzeja Boboli.')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, kult świętych, prośby, intencje, świadectwa')
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', 'Prześlij prośbę do św. Andrzeja Boboli')
@section('og_description', 'Formularz do przesyłania prośb i intencji do św. Andrzeja Boboli oraz świadectwa otrzymanych łaska za wstawinnictwem św. Andrzeja Boboli.')
{{-- Koniec social udostępnanie--}}
@section('tresc')

    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>
            <li class="breadcrumb-item active" aria-current="page">Prześlij intencje</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}

    {{-- h1 na podstonie--}}
<div class="row mt-5">
    <div class="col-12 text-center">
        <h1 class="h1_podstrony fs-5 color-glowny">Prześlij intencje do modlitwy lub podziel się otrzymaną łaską:</h1>

    </div>
</div>
    <hr class="hr" />
    {{-- Koniec h1 na podstonie--}}

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            {{--<div class="card-header">Prześlij intencje do modlitwy lub podziel się otrzymaną łaską:</div>--}}




                {{-- Formularze kontakowe dla niezalogowanych i niepotwierdzonych--}}
            <div class="card-body">
                <form method="POST" action="{{ route('przeslijIntencje') }}">
                    @csrf


                    <div class="form-outline mb-3" data-mdb-input-init>

                        {{--<textarea class="form-control @error('tresc_nadeslana') is-invalid @enderror"
                                  aria-label="Intencja:" name="tresc_nadeslana" id="intencja"
                                  required autocomplete="tresc" autofocus rows="8"
                        >{{ old('tresc') }}
                        </textarea>--}}
                        <textarea class="form-control @error('tresc_nadeslana') is-invalid @enderror"
                                  name="tresc_nadeslana"
                                  id="intencja"
                                  autocomplete="tresc_nadeslana"

                                  rows="8">{{ old('tresc_nadeslana') }}</textarea>
                        {{--<label class="form-label" for="textAreaExample">Intencja...</label>--}}
                        <label class="form-label" for="intencja">Intencja...</label>
                        @error('tresc_nadeslana')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    {{--<div class="form-outline" data-mdb-input-init>
                        <textarea class="form-control @error('tresc_nadeslana') is-invalid @enderror" id="textAreaExample" rows="4"></textarea>
                        <label class="form-label" for="textAreaExample">Intencja...</label>
                    </div>--}}

                    <div class="form-group row mb-2  ">
                        <label for="cap"
                               class="col-md-4 col-form-label">Nie jestem robotem</label>
                        <div class="captcha col-md-6 " id="cap" style="height: 55px">
                            <span id="cap">{!! captcha_img() !!}</span>
                        </div>
                    </div>
                    <div class="form-group row mb-2  ">
                        <label for="ods"
                               class="col-md-4 col-form-label"></label>
                        <div class="captcha col-md-6 " id="ods" >
                            {{--<button type="button" class="btn btn-danger" class="reload" id="reload" title="Nowy obrazek">
                                ↻
                            </button>--}}
                            <button type="button" class="btn btn-danger reload" data-mdb-ripple-init id="reload" title="Nowy obrazek">
                                <i class="fas fa-arrows-rotate"></i> Nowy obrazek
                            </button>
                        </div>
                    </div>
                  {{--  <div class="form-control mb-0" data-mdb-input-init>
                        <div class="col-md-8 offset-md-4">
                            <input id="captcha" type="text" class="form-control mb-2 @error('captcha') is-invalid @enderror"
                                   name="captcha">
                            <label class="form-label" for="captcha">Przepisz tekst z obrazka</label>

                        </div>
                    </div>--}}

                    <div class="col-md-8 offset-md-4">
                    <div class="form-outline" data-mdb-input-init>
                        <input type="text" id="captcha" name="captcha" class="mb-2 form-control @error('captcha') is-invalid @enderror" />
                        <label class="form-label" for="captcha">Przepisz tekst z obrazka</label>
                    </div>
                    </div>
                    {{-- placeholder="Przepisz tekst z obrazka"--}}
                    @error('captcha')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" data-mdb-ripple-init>
                                Wyślij intencję
                            </button>
                        </div>
                    </div>
                </form>
            </div>




        </div>
    </div>

</div>

@endsection
