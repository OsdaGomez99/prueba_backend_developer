@extends('app')

@section('titulo', 'Clientes - Test')

@section('descripcion', 'Clientes')

@section('contenido')

<div class="row">
    <div class="row col-12">
        <table class="table table-success table-striped">
            <th>RUT</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>País</th>
            <tbody>
                @foreach ($clientes as $cli)
                    <tr>
                        <td>{{$cli->rut_cliente}}</td>
                        <td>{{$cli->nombre_cliente}}</td>
                        <td>{{$cli->apellido_cliente}}</td>
                        <td>{{$cli->dir_cliente}}</td>
                        <td>{{$cli->tel_cliente}}</td>
                        <td>{{$cli->pais_cliente}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$clientes->links()}}
    </div>
</div>

@endsection
