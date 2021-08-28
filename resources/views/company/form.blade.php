<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" required class="form-control @error('name') is-invalid @enderror" value="{{ $company->name }}" id="name" name="name" aria-describedby="emailHelp">
    <div class="invalid-feedback">
        <span>
            @error('name') {{$message}} @enderror
        </span>
    </div>
</div>

<div class="form-group">
    <label for="nit">Nit</label>
    <input type="text" required class="form-control @error('nit') is-invalid @enderror" value="{{ $company->nit }}" id="nit" name="nit" aria-describedby="emailHelp">
    <div class="invalid-feedback">
        <span>
            @error('nit') {{$message}} @enderror
        </span>
    </div>
</div>

<div class="form-group">
    <label for="phone">Telefono</label>
    <input type="text" required class="form-control @error('phone') is-invalid @enderror" value="{{ $company->phone }}" id="phone" name="phone" aria-describedby="emailHelp">
    <div class="invalid-feedback">
        <span>
            @error('phone') {{$message}} @enderror
        </span>
    </div>
</div>

<div class="form-group">
    <label for="addres">Direccion</label>
    <input type="text" required class="form-control @error('addres') is-invalid @enderror" value="{{ $company->addres }}" id="addres" name="addres" aria-describedby="emailHelp">
    <div class="invalid-feedback">
        <span>
            @error('addres') {{$message}} @enderror
        </span>
    </div>
</div>

<div class="form-group">
    <label for="email">Correo</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ $company->email }}" id="email" name="email" aria-describedby="emailHelp">
    <div class="invalid-feedback">
        <span>
            @error('email') {{$message}} @enderror
        </span>
    </div>
</div>
