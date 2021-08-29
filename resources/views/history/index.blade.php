<ul class="timeline">
    @foreach($project->histories as $history)
    <li>
        <div class="row">
            <div class="col-6">
                <p class="text-muted">{{ $history->user->name }}</p>
            </div>
            <div class="col-6">
                <a href="#" class="float-right">{{ Carbon\Carbon::parse($history->created_at)->diffForHumans() }}</a>
            </div>
            <p class="pt-2">{{ $history->functionality }}</p>
        </div>

        <div class="row">
            <div class="col-12">

                <a href="#" class="card-link" data-toggle="modal" data-target="#tickets{{$history->id}}">Ver Tickets</a>
                @include('ticket.index')
                
                <button title="Añadir Historia" class="btn float-right btn-outline-info btn-sm" type="button" data-toggle="collapse" data-target="#edit-history-{{$history->id}}" aria-expanded="false" aria-controls="edit-history-{{$history->id}}">
                    <i class="fa fa-edit"></i>
                    Editar historia
                </button>
                @include('history.edit')


                <button title="Añadir Historia" class="btn float-right btn-outline-danger btn-sm mr-2" type="button" data-toggle="modal" data-target="#borrar{{$history->id}}">
                    <i class="fa fa-trash"></i>
                    Eliminar historia
                </button>
                @include('history.delete')
            </div>
        </div>
        <hr>
    </li>
    @endforeach
</ul>