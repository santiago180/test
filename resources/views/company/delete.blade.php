<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#borrar{{$company->id}}">
    <i class="fa fa-trash"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="borrar{{$company->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Deseas elimirar la compañia {{ $company->name }}</h3>
                <form class="center_btn" action="{{  url('compania/'.$company->id)  }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    <button data-dismiss="modal" class="btn btn-danger">cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>