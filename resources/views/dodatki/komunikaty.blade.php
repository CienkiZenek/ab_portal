{{-- Wyświetlanie błędów--}}
@if($errors->count())
    <div class="">
        @foreach($errors->all() as $error)
            <div class="alert-danger p-1 fw-bold col-6 rounded-1 mt-1">    {{ $error }}</div>
        @endforeach
    </div>
@endif

{{-- Wyświetlanie komunikatów--}}

@if(session('komunikat'))
<div class="alert alert-primary">{{ session('komunikat') }}</div>
    @endif

