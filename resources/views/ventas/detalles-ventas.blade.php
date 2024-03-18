@extends('app')

@section('titulo', 'Detalles de venta Venta - Test')

@section('descripcion', 'Detalles de Venta')

@section('contenido')

    <div class="row">
        <div class="row col-4">
            <div class="form-group">
                <label for="">Vendedor</label>
                <input type="text" class="form-control" value="{{$venta->vendedor->nombre_ven}} {{$venta->vendedor->apellido_ven}}" id="" disabled>
            </div>
        </div>
        <div class="row col-4">
            <div class="form-group">
                <label for="">Cliente</label>
                <input type="text" class="form-control" value="{{$venta->cliente->nombre_cliente}} {{$venta->cliente->apellido_cliente}}" id="" disabled>
            </div>
        </div>
        <div class="row col-4">
            <div class="form-group">
                <label for="">Sucursal</label>
                <input type="text" class="form-control" value="{{$venta->sucursal->pais}}" id="" disabled>
            </div>
        </div>
        <div class="row col-4">
            <div class="form-group">
                <label for="">Fecha Venta</label>
                <input type="date" class="form-control" name="fecha_venta" id="fecha_venta" aria-describedby="helpId" placeholder="" value="{{$venta->fecha_venta}}" disabled>
            </div>
        </div>
        <div class="row col-4">
            <div class="form-group">
                <label for="">Monto Total</label>
                <input type="number" class="form-control" name="monto_total" id="monto_total" aria-describedby="helpId" placeholder="" min=1 value="{{$venta->monto_total}}" disabled>
            </div>
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar detalle</button>
    <a href="/ventas" class="btn btn-secondary custom">Regresar</a>
</form>

<div class="row mt-4">
    <div class="row col-12">
        <table class="table table-success table-striped">
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Subtotal</th>
            <th>Acciones</th>
            <tbody>
                @foreach ($detalles as $det)
                    <tr>
                        <td>{{$det->producto->nombre_pro}}</td>
                        <td>{{$det->cantidad}}</td>
                        <td>{{$det->precio_unitario}}</td>
                        <td>{{$det->subtotal}}</td>
                        <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#borrar">Borrar</button>
                            <!-- Inicio del Modal de borrado-->
                            <form action="{{ route('detalles_venta.destroy', ['id' => $det->id, 'venta' => $venta]) }}" method="POST">
                                <!-- Modal -->
                                <div class="modal fade" id="borrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <label for="">¿Está seguro que desea eliminar el detalle de venta?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Borrar</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Fin del Modal de borrado-->
                            <!-- Inicio del Modal de guardado y actualizado-->
                            <form action="{{ route('detalles_venta.store', $venta->id)  }}" method="POST" id="form">
                                @csrf
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Detalle de Venta</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="row col-4">
                                                        <div class="form-group">
                                                            <label for="">Producto</label>
                                                            <select name="id_producto" id="id_producto" class="form-control" required>
                                                                <option value="">Seleccione</option>
                                                                @foreach ($productos as $pro)
                                                                    <option value="{{ $pro->id }}">{{$pro->nombre_pro}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row col-4">
                                                        <div class="form-group">
                                                            <label for="">Cantidad</label>
                                                            <input type="number" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="" min="1" required>
                                                        </div>
                                                    </div>
                                                    <div class="row col-4">
                                                        <div class="form-group">
                                                            <label for="">Precio Unitario</label>
                                                            <input type="number" class="form-control" name="precio_unitario" id="precio_unitario" aria-describedby="helpId" placeholder="" min=1 required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-info">Guardar</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Fin del Modal de guardado y actualizado-->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$detalles->links()}}
    </div>
</div>

@endsection
