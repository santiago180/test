@extends('layouts.template')
@section('title', 'Compañias')
@section('content')

<div class="card p-2">
    <div class="row m-2">
        <div class="col-12">
            <button data-toggle="modal" data-target="#createCompany" class="btn btn-info float-right mb-2">
                <i class="fa fa-plus"></i>
                Nuevo
            </button>
        </div>
    </div>
    <div class="table-resposive">
        <table class="table table-hover table-sm">
            <thead class="">
                <tr>
                    <th>Nombre</th>
                    <th>Nit</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Correo</th>
                    <th class="text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
               @foreach($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->nit }}</td>
                    <td>{{ $company->phone }}</td>
                    <td>{{ $company->addres }}</td>
                    <td>{{ $company->email }}</td>
                    <td>
                        
                        <div class="row">
                            <div class="col-6">@include('company.edit')</div>
                            <div class="col-6">@include('company.delete')</div>
                        </div>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('company.create')

@endsection