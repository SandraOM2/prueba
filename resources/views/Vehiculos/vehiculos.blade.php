@extends('layouts.app')

@section('content')

 <div id="content-wrapper">

      <div class="jumbotron jumbotron-fluid" style="background:#CFE5AA">
  <div class="container">
     <h1 class="display-4 text-success"> <i class="fas fa-truck-monster"></i>Vehículos</h1>
    <hr class="my-4">
    <div class="row">
    <div class="col">
        <span class="float-right">
    <button type="button" class="btn btn-outline-success" data-toggle="modal"  data-target="#Añadir"><i class="fas fa-plus"></i></button>
    <button type="button" class="btn btn-outline-success"data-toggle="modal"  data-target="#Editar"><i class="fas fa-edit"></i></button>
    <button type="button" class="btn btn-outline-success"data-toggle="modal" data-target="#Eliminar"><i class="fas fa-trash-alt"></i></button>
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Descarga"><i class="fas fa-download"></i></button>
        </span>




    </div>
</div>
    
  </div>
</div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th></th>
                    <th>N° Econ&oacutemico</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Año</th>
                    <th>Tipo</th>
                    <th>Num Serie</th>
                    <th>Num Hidr&aacuteulico</th>
                    <th>Llantas</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th></th>
                    <th>N° Econ&oacutemico</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Año</th>
                    <th>Tipo</th>
                    <th>Num Serie</th>
                    <th>Num Hidr&aacuteulico</th>
                    <th>Llantas</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr class="unread">
                    <td class=""><label><input type="checkbox" checked="" class="i-checks"></label></td>
                    <td>0987</td>
                    <td>2009</td>
                    <td>ford</td>
                    <td>2009</td>
                    <td>pickup</td>
                    <td>948564647</td>
                    <td>12</td>
                    <td>buen estado</td>
                    </tr>
                  
         
                </tbody>
              </table>
            
        



      </div>


<!-----------------MODALS------------------------------------->     

<!----- Añadir--->
        <div class="modal fade" id="Añadir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">N° Economico:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Modelo:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Marca:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Año:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Marca:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div><div class="form-group">
            <label for="recipient-name" class="col-form-label">Tipo:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Num Serie:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Num Hidráulico:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Llantas:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" style="background:#7AB416">Añadir Registro</button>
      </div>
    </div>
  </div>
</div>


<!--- Editar ----->

<div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">N° Economico:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Modelo:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Marca:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Año:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Marca:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div><div class="form-group">
            <label for="recipient-name" class="col-form-label">Tipo:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Num Serie:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Num Hidráulico:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Llantas:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" style="background:#7AB416">Editar Registro</button>
      </div>
    </div>
  </div>
</div>

<!-- Eliminar -->
<div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¡Advertencia!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estas seguro de eliminar el registro?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" style="background:#7AB416">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<!-- Descarga -->


<div class="modal fade" id="Descarga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Descargando Archivo...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background:#7AB416">Aceptar</button>
        
      </div>
    </div>
  </div>
</div>
  
      @endsection