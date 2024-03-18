@extends('app')

@section('titulo', 'Ventas - Test')

@section('descripcion', 'Ventas')

@section('contenido')
<div>
   <a href="/ventas/create" class="btn btn-primary mb-3">Crear Compra</a>
</div>
<div class="row">
    <div class="row col-12">
        <table class="table table-success table-striped">
            <th>Vendedor</th>
            <th>Cliente</th>
            <th>Sucursal</th>
            <th>Fecha de Venta</th>
            <th>Monto Total</th>
            <th>Acciones</th>
            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        <td>
                            {{$venta->vendedor->nombre_ven}} {{$venta->vendedor->apellido_ven}}
                        </td>
                        <td>
                            {{$venta->cliente->nombre_cliente}} {{$venta->cliente->apellido_cliente}}
                        </td>
                        <td>
                            {{$venta->sucursal->pais}}
                        </td>
                        <td>
                            {{\Carbon\Carbon::parse($venta->fecha_venta)->format('d/m/Y')}}
                        </td>
                        <td>
                            {{number_format($venta->monto_total, 2, '.', '')}}
                        </td>
                        <td>
                            <a href="ventas/{{$venta->id}}/detalle_venta" class="btn btn-success">Ver Detalles</a>
                            <a href="ventas/{{$venta->id}}/edit" class="btn btn-info">Editar</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" value="Borrar">Borrar</button>
                            <form action="{{ route('ventas.destroy', ['venta' => $venta->id]) }}" method="POST">
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Confirmación</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="form-group">
                                                            <label for="">¿Está seguro que desea eliminar la venta?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin del Modal -->
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$ventas->links()}}
    </div>
</div>

@endsection
