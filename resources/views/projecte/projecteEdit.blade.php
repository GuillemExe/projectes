@extends('master.master')

@section('pageTitle','Pagina principal')

@section('header')
@include('template.header')
@endsection


@section('content')
<div class="my-5">
    <form action="{{ route('projectes.update', ['projecte' => $projecte->id]) }}" method="post">
        
        @method('put')
        @csrf
    
        <div class="form-group">
            <label>Nom</label>
            <input name="nom" value="{{ $projecte->nom }}" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input name="slug" value="{{ $projecte->slug }}" class="form-control"/>
        </div>

        <input class="btn mt-4 btn-danger justify-content-center" type="submit" value="update"/>
    </form>
</div>

@endsection


@section('footer')
@include('template.footer')
@endsection