@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
<h1 class="p-4 text-center">Train List</h1>

<section class="trains container-fluid p-4">
    <div class="row d-flex justify-content-center">
        @foreach ($trains as $train)
            <div class="card col-2 m-2">
                <div class="card-body p-4">
                    <p class="card-text">Numero treno: {{ $train->codice_treno }}</p>
                    <h5 class="card-title mb-4">Da: <strong>{{ $train->stazione_di_partenza }}</strong></h5>
                    <h5 class="card-title mb-4">A: <strong>{{ $train->stazione_di_arrivo }}</strong></h5>
                    <p class="card-text">Partenza alle {{ $train->orario_di_partenza }}</p>
                    <p class="card-text">Arrivo alle {{ $train->orario_di_arrivo }}</p>

                    <p class="card-text">In orario: {{ $train->in_orario }}</p>
                </div>
            </div>
        @endforeach
    </div>

</section>
@endsection
