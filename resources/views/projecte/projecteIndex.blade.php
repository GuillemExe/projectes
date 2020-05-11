@extends('master.master')

@section('pageTitle','Pagina principal')

@section('header')
@include('template.header')
@endsection


@section('content')
<div class="row mt-5">
    @if($projectes)
        @foreach ($projectes as $projecte)
            <div class="col-4 mb-5" style="border: 1px solid black">
                <div class="py-4 d-flex flex-column justify-content-center align-items-center image" style="background-image: url( {{ $coche->coche_image ?? '' }} ); background-color: white">
                    <div class="panel panel-default">
                        <div class="panel-body">{{ $projecte->nom }}</div>
                    </div>
                    <form action="{{ url('/projectes', ['id' => $projecte->id]) }}" method="get">
                        <input class="btn mt-4 btn-info justify-content-center font-weight-bold text-dark" type="submit" value="INFORMACION"/>
                    </form>
                    
                    <form action="{{ route('projectes.edit', ['projecte' => $projecte->id]) }}" method="GET">
                        <input class="btn mt-4 btn-warning justify-content-center font-weight-bold text-dark" type="submit" value="EDITAR"/>
                    </form>

                    <form action="{{ route('projectes.destroy', ['projecte' => $projecte->id]) }}" method="post">
                        @method('delete')
                        @csrf
                        <input class="btn mt-4 btn-danger justify-content-center font-weight-bold text-dark" type="submit" value="delete"/>
                    </form>
                </div>
            </div>
        @endforeach
        <form class="col-4" action="{{ route('projectes.create') }}" method="GET">
            <input class="mb-5 btn w-100 btn-info justify-content-center font-weight-bold text-dark" type="submit" value="CREAR NUEVO" 
                style="border: 1px solid black; display: flex; height: 249px; justify-content: center; align-items: center;"/>
        </form>
    @endif

@endsection


@section('footer')
@include('template.footer')
@endsection