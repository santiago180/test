<!-- Modal -->
<div class="modal fade" id="tickets{{$history->id}}" tabindex="-1" aria-labelledby="ticketsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ticketsLabel">{{$project->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{ $history->functionality }}</p>

                <div class="row">
                    <button title="Añadir ticket" class="btn float-left btn-outline-info btn-sm" type="button" data-toggle="collapse" data-target="#create-ticket-{{$history->id}}" aria-expanded="false" aria-controls="create-ticket-{{$history->id}}">
                        <i class="fa fa-plus"></i>
                        Añadir ticket
                    </button>
                </div>
                <div class="row">
                    @include('ticket.create')
                </div>

                <ul class="timeline">
                    @foreach($history->tickets as $ticket)
                    <li>
                        <div class="row">
                            <div class="col-6">
                                <p class="text-muted">{{ $ticket->task }}</p>
                            </div>
                            <div class="col-6">
                                <a href="#" class="float-right">{{ Carbon\Carbon::parse($ticket->created_at)->diffForHumans() }}</a>
                            </div>
                            <p class="pt-2">{{ $ticket->comments }}</p>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <h5><span class="badge badge-success">{{ $ticket->state->state }}</span></h5>
                            </div>
                            <div class="col-6">
                                <button title="Añadir Ticket" class="btn float-right btn-outline-info btn-sm" type="button" data-toggle="collapse" data-target="#edit-ticket-{{$ticket->id}}" aria-expanded="false" aria-controls="edit-ticket-{{$ticket->id}}">
                                    <i class="fa fa-edit"></i>
                                </button>

                                <button title="Eliminar Ticket" class="btn float-right btn-outline-danger btn-sm mr-2" type="button"  data-toggle="modal" data-target="#delete-ticket-{{$ticket->id}}">
                                    <i class="fa fa-trash"></i>
                                </button>
                                @include('ticket.delete')
                            </div>
                            @include('ticket.edit')

                        </div>
                        <hr>
                    </li>
                    @endforeach
                </ul>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>