<div class="mt-4 collapse" id="create-ticket-{{$history->id}}">
    <form method="POST" action="{{ url('ticket')}}">
        @csrf

        <div class="form-group">
            <label for="task">Tarea</label>
            <input type="text" required class="form-control @error('task') is-invalid @enderror" id="task" name="task" aria-describedby="emailHelp">

            <div class="invalid-feedback">
                <span>
                    @error('task') {{$message}} @enderror
                </span>
            </div>
        </div>

        <div class="form-group">
            <label for="comments">Comentarios</label>
            <textarea id="comments" class="form-control  @error('comments') is-invalid @enderror" name="comments" rows="2" cols="600"></textarea>

            <div class="invalid-feedback">
                <span>
                    @error('comments') {{$message}} @enderror
                </span>
            </div>
        </div>

        <input hidden value="{{ $history->id }}" name="history_id">

        <button type="submit" class="btn btn-info"> Guardar </button>

    </form>
</div>