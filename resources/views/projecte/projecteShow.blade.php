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
                <div class="col-4 mb-5" style="border: 1px solid black">
                    <p>{{ $tasca->nom }}</p>
                    <p>{{ $tasca->slug }}</p>
                </div>
                <form action="{{ route('projectes.tasques.show', ['projecte' => $projecte->id, 'tasca' => $tasca->id]) }}" method="GET">
                    <input class="btn mt-4 btn-info justify-content-center font-weight-bold text-dark" type="submit" value="INFORMACION"/>
                </form>
            @endforeach
        </div>
    @endif
@endif

@endsection


@section('footer')
@include('template.footer')
@endsection