@extends('app')

@section('titulo', 'Vendedores - Test')

@section('descripcion', 'Vendedores')

@section('contenido')

<div class="row">
    <div class="row col-12">
        <table class="table table-success table-striped">
            <th>RUT</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Fecha de Nacimiento</th>
            <th>Email</th>
            <th>País</th>
            <tbody>
                @foreach ($vends as $ven)
                    <tr>
                        <td>{{$ven->rut_ven}}</td>
                        <td>{{$ven->nombre_ven}}</td>
                        <td>{{$ven->apellido_ven}}</td>
                        <td>{{$ven->dir_ven}}</td>
                        <td>{{$ven->tel_ven}}</td>
                        <td>{{\Carbon\Carbon::parse($ven->fecha_na_ve)->format('d/m/Y')}}</td>
                        <td>{{$ven->email_ven}}</td>
                        <td>{{$ven->pais_ven}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$vends->links()}}
    </div>
</div>

@endsection
