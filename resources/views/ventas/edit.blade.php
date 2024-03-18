@extends('app')

@section('titulo', 'Editar Venta - Test')

@section('descripcion', 'Editar Venta')

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

<form action="{{ route('ventas.update', $venta->id) }}" method = "POST" id="form">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="row col-4">
            <div class="form-group">
                <label for="">Vendedor</label>
                <select name="id_vendedor" id="id_vendedor" class="form-control" required>
                    @foreach ($vends as $ven)
                        <option value="{{ $ven->id }}"
                            @if ($ven->id == $venta->id_vendedor)
                                selected
                            @endif>
                        {{$ven->nombre_ven}} {{$ven->apellido_ven}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row col-4">
            <div class="form-group">
                <label for="">Cliente</label>
                <select name="id_cliente" id="id_cliente" class="form-control" required>
                    @foreach ($clientes as $cli)
                        <option value="{{ $cli->id }}"
                            @if ($cli->id == $venta->id_cliente)
                                selected
                            @endif>
                        {{$cli->nombre_cliente}} {{$cli->apellido_cliente}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row col-4">
            <div class="form-group">
                <label for="">Sucursal</label>
                <select name="id_sucursal" id="id_sucursal" class="form-control" required>
                    @foreach ($sucs as $suc)
                        <option value="{{ $suc->id }}"
                            @if ($suc->id == $venta->id_sucursal)
                                selected
                            @endif>
                        {{$suc->pais}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row col-4">
            <div class="form-group">
                <label for="">Fecha Venta</label>
                <input type="date" class="form-control" name="fecha_venta" id="fecha_venta" aria-describedby="helpId" placeholder="" value="{{$venta->fecha_venta}}" required>
            </div>
        </div>
        <div class="row col-4">
            <div class="form-group">
                <label for="">Monto Total</label>
                <input type="number" class="form-control" name="monto_total" id="monto_total" aria-describedby="helpId" placeholder="" min=1 value="{{$venta->monto_total}}" required>
            </div>
        </div>
    </div>
    <br>
    <button type="submit" id="submit" class="btn btn-primary custom">Actualizar</button>
    <a href="/ventas" class="btn btn-secondary custom">Cancelar</a>
</form>

@endsection
