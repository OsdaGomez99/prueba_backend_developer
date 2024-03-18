@extends('app')

@section('titulo', 'Proveedores - Test')

@section('descripcion', 'Proveedores')

@section('contenido')

<div class="row">
    <div class="row col-12">
        <table class="table table-success table-striped">
            <th>RUT</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Página Web</th>
            <th>País</th>
            <tbody>
                @foreach ($provs as $prov)
                    <tr>
                        <td>{{$prov->rut_prov}}</td>
                        <td>{{$prov->nombre_prov}}</td>
                        <td>{{$prov->dir_prov}}</td>
                        <td>{{$prov->tel_prov}}</td>
                        <td>{{$prov->pagina_web}}</td>
                        <td>{{$prov->pais_prov}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$provs->links()}}
    </div>
</div>

@endsection
