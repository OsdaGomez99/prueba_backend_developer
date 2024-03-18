@extends('app')

@section('titulo', 'Productos - Test')

@section('descripcion', 'Productos')

@section('contenido')

<div class="row">
    <div class="row col-12">
        <table class="table table-success table-striped">
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Sucursal</th>
            <th>Proveedor</th>
            <tbody>
                @foreach ($productos as $pro)
                    <tr>
                        <td>{{$pro->nombre_pro}}</td>
                        <td>{{number_format($pro->precio_pro, 2, '.', '')}}</td>
                        <td>{{$pro->stock_pro}}</td>
                        <td>{{$pro->id_sucursal}}</td>
                        <td>{{$pro->proveedor->nombre_prov}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$productos->links()}}
    </div>
</div>

@endsection
