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

<form action="{{ route('ventas.store') }}" method = "POST" id="form">
    @csrf
    <div class="row">
        <div class="row col-4">
            <div class="form-group">
                <label for="">Vendedor</label>
                <select name="id_vendedor" id="id_vendedor" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach ($vends as $ven)
                        <option value="{{ $ven->id }}">{{$ven->nombre_ven}} {{$ven->apellido_ven}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row col-4">
            <div class="form-group">
                <label for="">Cliente</label>
                <select name="id_cliente" id="id_cliente" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach ($clientes as $cli)
                        <option value="{{ $cli->id }}">{{$cli->nombre_cliente}} {{$cli->apellido_cliente}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row col-4">
            <div class="form-group">
                <label for="">Sucursal</label>
                <select name="id_sucursal" id="id_sucursal" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach ($sucs as $suc)
                        <option value="{{ $suc->id }}">{{$suc->pais}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row col-4">
            <div class="form-group">
                <label for="">Fecha Venta</label>
                <input type="date" class="form-control" name="fecha_venta" id="fecha_venta" aria-describedby="helpId" placeholder="" required>
            </div>
        </div>
        <div class="row col-4">
            <div class="form-group">
                <label for="">Monto Total</label>
                <input type="number" class="form-control" name="monto_total" id="monto_total" aria-describedby="helpId" placeholder="" min=1 required>
            </div>
        </div>
    </div>
    <br>
    <button type="submit" id="submit" class="btn btn-primary custom">Guardar</button>
    <a href="/ventas" class="btn btn-secondary custom">Cancelar</a>
</form>

@endsection
