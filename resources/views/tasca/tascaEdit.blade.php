@extends('master.master')

@section('pageTitle','Pagina principal')

@section('header')
@include('template.header')
@endsection


@section('content')
<h1>Editar una tasca</h1>
<div class="my-5">
    <form action="{{ route('projectes.tasques.update', ['projecte' => $projecteId, 'tasca' => $tasca->id, ]) }}" method="put">
        
        @method('put')
        @csrf
    
        <fieldset disabled>
            <div class="form-group">
                <label>Id del projecte relacionat</label>
                <input name="projecte_id" class="form-control" value="{{ $projecteId }}"/>
            </div>
        </fieldset>

        <div class="form-group">
            <label>Nom</label>
            <input name="nom" class="form-control" value="{{ $tasca->nom }}"/>
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input name="slug" class="form-control" value="{{ $tasca->slug }}"/>
        </div>

        <div class="form-group">
            <label>Completada</label>
            <input name="completada" type="checkbox" data-toggle="toggle" value="{{ $tasca->completada }}">
        </div>

        <div class="form-group">
            <label>Descripcio</label>
            <textarea name="descripcio" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $tasca->descripcio }}</textarea>
        </div>

        <input class="btn mt-4 btn-danger justify-content-center" type="submit" value="update"/>
    </form>
</div>
@endsection


@section('footer')
@include('template.footer')
@endsection