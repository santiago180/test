<div class="mt-4 collapse" id="edit-history-{{$history->id}}">
    <form method="POST" action="{{ url('historia/'.$history->id)}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="functionality">Funcionalidad</label>
            <textarea id="functionality" class="form-control  @error('functionality') is-invalid @enderror" name="functionality" rows="2" cols="600">{{ $history->functionality }}</textarea>

            <div class="invalid-feedback">
                <span>
                    @error('functionality') {{$message}} @enderror
                </span>
            </div>
        </div>


        <button type="submit" class="btn btn-info"> Guardar </button>

    </form>
</div>