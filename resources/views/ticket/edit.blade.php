<div class="mt-4 collapse" id="edit-ticket-{{$ticket->id}}">
    <form method="POST" action="{{ url('ticket/'.$ticket->id)}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="task">Tarea</label>
            <input type="text" required class="form-control @error('task') is-invalid @enderror" value="{{ $ticket->task }}" id="task" name="task" aria-describedby="emailHelp">

            <div class="invalid-feedback">
                <span>
                    @error('task') {{$message}} @enderror
                </span>
            </div>
        </div>

        <div class="form-group">
            <label for="comments">Comentarios</label>
            <textarea id="comments" class="form-control  @error('comments') is-invalid @enderror" name="comments" rows="2" cols="600"> {{$ticket->comments}} </textarea>

            <div class="invalid-feedback">
                <span>
                    @error('comments') {{$message}} @enderror
                </span>
            </div>
        </div>

        <div class="form-group">
            <label for="state_id" class="">Estado</label>

            <select class="form-control @error('state_id') is-invalid @enderror" value="{{ $ticket->state_id }}" name="state_id" id="state_id">
                @foreach($states as $state)
                    @if($ticket->state_id == $state->id)
                        <option value="{{$state->id}}" selected>{{$state->state}}</option>
                    @else
                        <option value="{{$state->id}}">{{$state->state}}</option>
                    @endif
                @endforeach
            </select>
            @error('state_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <input hidden value="{{ $history->id }}" name="history_id">



        <button type="submit" class="btn btn-info"> Guardar </button>

    </form>
</div>