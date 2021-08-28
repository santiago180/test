<div class="mt-4 collapse" id="create-history-{{$project->id}}">
    <form method="POST" action="{{ url('historia')}}">
        @csrf
        <div class="form-group">
            <label for="functionality">Funcionalidad</label>
            <textarea id="functionality" class="form-control  @error('functionality') is-invalid @enderror" name="functionality" rows="2" cols="600"></textarea>

            <div class="invalid-feedback">
                <span>
                    @error('functionality') {{$message}} @enderror
                </span>
            </div>
        </div>

        <input hidden value="{{ $project->id }}" name="project_id">

        <button type="submit" class="btn btn-info"> Guardar </button>

    </form>
</div>