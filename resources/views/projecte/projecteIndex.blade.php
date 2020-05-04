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
                        <div class="panel-body">{{ $projecte->name }}</div>
                    </div>
                    <form action="{{ url('/projectes', ['id' => $projecte->id]) }}" method="get">
                        <input class="btn mt-4 btn-info justify-content-center font-weight-bold text-dark" type="submit" value="INFORMACION"/>
                    </form>
                    <form action="{{ url('/projectes/edit', ['id' => $projecte->id]) }}" method="get">
                        <input class="btn mt-4 btn-warning justify-content-center font-weight-bold text-dark" type="submit" value="EDITAR"/>
                    </form>
                    <form action="{{ url('/projectes', ['id' => $projecte->id]) }}" method="post">
                        <input class="btn mt-4 btn-danger justify-content-center font-weight-bold text-dark" type="submit" value="ELIMINAR"/>
                        @method('delete')
                        @csrf
                    </form>
                </div>
            </div>
        @endforeach
    @endif

@endsection


@section('footer')
@include('template.footer')
@endsection