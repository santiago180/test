
<button title="Editar Proyecto" class="btn float-right" type="button"  data-toggle="modal" data-target="#editar{{$project->id}}">
    <i class="fa fa-edit"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="editar{{$project->id}}" tabindex="-1" aria-labelledby="editar{{$project->id}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editar{{$project->id}}">Editar Proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('proyecto/'.$project->id) }} " method="POST">
        @csrf
        @method('PATCH')
        @include('project.edit_form')
        <div class="modal-footer">
          <!-- <button type="submit" class="btn btn-danger float-left">Eliminar</button> -->
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        @include('project.delete')
      </div>
      </div>
    </div>
  </div>
</div>
