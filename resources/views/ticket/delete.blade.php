<!-- Modal -->
<div class="modal fade" id="delete-ticket-{{$ticket->id}}" tabindex="-1" aria-labelledby="delete-ticket-{{$ticket->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Deseas elimirar el ticket {{ $ticket->task }}</h3>
                <form class="center_btn" action="{{  url('ticket/'.$ticket->id)  }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    <button data-dismiss="modal" class="btn btn-danger">cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>