<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" required class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="emailHelp">
    <div class="invalid-feedback">
        <span>
            @error('name') {{$message}} @enderror
        </span>
    </div>
</div>

<div class="form-group">
    <label for="company_id" class="">{{ __('Compañia') }}</label>

    <select class="form-control @error('company_id') is-invalid @enderror" name="company_id" id="company_id">
        <option selected disabled>-- Seleccione Compañia --</option>
        @foreach($companies as $company)
            <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
    </select>
    @error('company_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="description">Descripción</label>
    <textarea id="description" class="form-control  @error('description') is-invalid @enderror" name="description" rows="3"></textarea>
    
    <div class="invalid-feedback">
        <span>
            @error('description') {{$message}} @enderror
        </span>
    </div>
</div>

