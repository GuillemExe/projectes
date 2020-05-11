@extends('master.master')

@section('pageTitle','Pagina principal')

@section('header')
@include('template.header')
@endsection


@section('content')
@if($projecte)
    <div>
        <p>{{ $projecte->nom }}</p>
    </div>
    <br>
    <div>
        <p>{{ $projecte->slug }}</p>
    </div>
    @if($tascas)
        <div class="row">
            @foreach ($tascas as $tasca)
                <div class="col-4 d-flex flex-column">
                    <div class="w-100" style="border: 1px solid black">
                        <p class="text-center">{{ $tasca->nom }}</p>
                        <p class="text-center">{{ $tasca->slug }}</p>
                    </div>
                    <form class="d-flex justify-content-center" action="{{ route('projectes.tasques.show', ['projecte' => $projecte->id, 'tasca' => $tasca->id]) }}" method="GET">
                        <input class="btn mt-4 btn-info justify-content-center font-weight-bold text-dark" type="submit" value="INFORMACION"/>
                    </form>
                </div>
            @endforeach
            <form class="col-4" action="{{ route('projectes.tasques.create', ['projecte' => $projecte->id]) }}" method="GET">
                <input class="mb-5 btn w-100 btn-info justify-content-center font-weight-bold text-dark" type="submit" value="CREAR NUEVO" 
                    style="border: 1px solid black; display: flex; height: 249px; justify-content: center; align-items: center;"/>
            </form>
        </div>
    @endif
@endif

@endsection


@section('footer')
@include('template.footer')
@endsection