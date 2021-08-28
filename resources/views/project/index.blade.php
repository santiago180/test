@extends('layouts.template')
@section('title', 'Proyectos')
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


    @foreach($projects as $project)
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4>{{$project->name}}</h4>
                </div>
                <div class="col-2">
                    @include('project.edit')
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <h5 class="card-title"><i class="mr-1 fas fa-building  ml-1 mr-2"></i>{{$project->company->name}}</h5>
                    <p class="card-text">{{$project->description}}</p>
                </div>
            </div>
            <div class="row">
                <div class=" col-6 mt-3">
                    <div class="row">
                        <button title="Añadir Historia" class="btn float-left btn-outline-info btn-sm" type="button" data-toggle="collapse" data-target="#create-history-{{$project->id}}" aria-expanded="false" aria-controls="create-history-{{$project->id}}">
                            <i class="fa fa-plus"></i>
                            Añadir historia
                        </button>
                    </div>
                    <div class="row">
                        @include('history.create')
                    </div>
                </div>
                <div class=" col-6  mt-3">
                    @if(count($project->histories) > 0)
                        <button title="ver Historial" class="btn float-left btn-outline-info btn-sm float-right" type="button" data-toggle="collapse" data-target="#history-proyect{{$project->id}}" aria-expanded="false" aria-controls="history-proyect{{$project->id}}">
                            <i class="fa fa-arrow-circle-down"></i>
                            Historial
                        </button>
                    @endif
                </div>
            </div>
        </div>

        <div class="collapse" id="history-proyect{{$project->id}}">
            <div class="card card-body">
                @include('history.index')
            </div>
        </div>
    </div>


    @endforeach

</div>
</head>

<body>



    @include('project.create')

    @endsection