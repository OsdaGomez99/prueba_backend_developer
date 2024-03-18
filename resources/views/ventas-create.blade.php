@extends('app')

@section('titulo', 'Crear Venta - Test')

@section('descripcion', 'Crear Venta')

@section('contenido')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/ventas" method = "POST" id="form">
    @csrf
    <div class="row">
        <div class="row col-12">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Fecha</label>
                    <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" required onchange="diaSemana();" required>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group">
                    <label for="Turno">Turno</label>
                    <input type="number" class="form-control" name="turno" id="turno" min="1" max="3" aria-describedby="helpId" onKeypress="event.preventDefault();">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h4>Vagones</h4>
        </div>

        <div class="row col-3">
            <div class="form-group">
                <label for="">TEU</label>
                <input type="text" class="form-control" name="vagones_teu" id="vagones_teu" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row col-3">
            <div class="form-group">
                <label for="">GRS-89</label>
                <input type="text" class="form-control" name="grs_89" id="grs_89" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row col-3">
            <div class="form-group">
                <label for="">Tolva Fino</label>
                <input type="text" class="form-control" name="tolva_fino" id="tolva_fino" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row col-3">
            <div class="form-group">
                <label for="">Tolva Grs</label>
                <input type="text" class="form-control" name="tolva_grs" id="tolva_grs" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="row col-3">
            <div class="form-group">
                <label for="">PCMH</label>
                <input type="text" class="form-control" name="pcmh" id="pcmh" aria-describedby="helpId" placeholder="">
            </div>
        </div>
    </div>
    <br>
    <button type="submit" id="submit" class="btn btn-primary custom">Guardar</button>
    <a href="/reportes" class="btn btn-secondary custom">Cancelar</a>
</form>

@endsection
