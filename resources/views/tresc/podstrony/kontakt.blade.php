@extends('szablon')
@section('title', 'Kontakt z redakcją portalu AndrzejBobola.info')
@section('description', 'Kontakt (napisz wiadomość) z redakcją portalu AndrzejBobola.info.')
@section('keywords', 'Bobola, Andrzej Bobola, św. Andrzej Bobola, AndrzejBobola.info, redakcja portalu AndrzejBobola.info')
{{-- social udostępnanie--}}
@section('og_url', Request::url())
@section('og_title', 'Kontakt z redakcją portalu AndrzejBobola.info')
@section('og_description', 'Formularz przesyłania wiadomość dla redakcji portalu AndrzejBobola.info')
{{-- Koniec social udostępnanie--}}
@section('tresc')



    {{-- breadcrumb--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('StronaGlowna')}}" class="color-glowny">Strona główna</a></li>

            <li class="breadcrumb-item active" aria-current="page">Wiadomość dla redakcji</li>
        </ol>
    </nav>
    {{-- Koniec breadcrumb--}}
    {{-- h1 na podstonie--}}

    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1 class="h1_podstrony fs-5 color-glowny">Wiadomość dla redakcji:</h1>

        </div>
    </div>
    <hr class="hr" />

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">

            <div class="card-body">
                <form method="POST" action="{{ route('listDoRedakcji') }}">
                    @csrf


                    {{--<div class="input-group mb-3">

                        <textarea class="form-control @error('tresc') is-invalid @enderror"
                                  aria-label="Wiadomość do redakcji:" name="tresc"
                                  required autocomplete="tresc" autofocus rows="6"
                        >{{ old('tresc') }}
                        </textarea>


                        @error('tresc')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>--}}
                    <div class="form-outline mb-3" data-mdb-input-init>

                        {{--<textarea class="form-control @error('tresc_nadeslana') is-invalid @enderror"
                                  aria-label="Intencja:" name="tresc_nadeslana" id="intencja"
                                  required autocomplete="tresc" autofocus rows="8"
                        >{{ old('tresc') }}
                        </textarea>--}}
                        <textarea class="form-control @error('tresc') is-invalid @enderror"
                                  name="tresc"
                                  id="intencja"
                                  autocomplete="tresc_nadeslana"

                                  rows="8">{{ old('tresc') }}</textarea>

                        <label class="form-label" for="intencja">Wiadomość dla redakcji:</label>
                        @error('tresc_nadeslana')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>



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
                            <button type="button" class="btn btn-danger reload mb-2"  id="reload" title="Nowy obrazek">
                                <i class="fas fa-arrows-rotate"></i> Nowy obrazek
                            </button>
                        </div>
                    </div>
                    <div class="col-md-8 offset-md-4">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="text" id="captcha" name="captcha" class="mb-3 form-control @error('captcha') is-invalid @enderror" />
                            <label class="form-label" for="captcha">Przepisz tekst z obrazka</label>
                        </div>
                    </div>
                    @error('captcha')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Wyślij wiadomość
                            </button>
                        </div>
                    </div>
                </form>
            </div>




        </div>
    </div>

</div>

@endsection
