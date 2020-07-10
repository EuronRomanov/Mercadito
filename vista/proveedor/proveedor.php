<!DOCTYPE html>
<html>
<head>
  <title>Proveedores</title>
  <?php  require_once('scripts.php'); ?>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
      <div class="container">
  
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="../cuenta/cuenta.php"><strong>Mercadito</strong></a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link" href="#">Contactos</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <i class="fa fa-user fa-lg"></i>
          Profile
        </a>
        <div class="dropdown-menu dropdown-default dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
          
          <a class="dropdown-item" href="#"><i class="fa fa-cog"></i> Settings</a>
          <a class="dropdown-item" href="#"> <i class="fa fa-power-off"></i> Logout</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>
<!-- contenido -->

<div class="container-fluid">
     
  
     <div class="row justify-content-center">
       <div class="col-xl-20">
         <div class="card text-left">
           <div class="card-header">
             Registro de Proveedores
           </div>
           <div class="card-body">
             <span class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
               Nuevo Proveedor <span class="fa fa-plus-circle"></span>
             </span>
             <hr>
             <div id="tablaDatatable"></div>
           </div>
           <div class="card-footer text-muted">
             By Papu
           </div>
         </div>
       </div>
     </div>
   </div>
 
<!-- modal Agregar-->
<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="frmnuevo" method="post" enctype="multipart/form-data" name="frmnuevo">
            <?php include_once('formulario.php'); ?>
          </form>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="ajax">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" id="btnAgregarnuevo" class="btn btn-primary">Agregar nuevo</button>
        </div>
      </div>
    </div>
  </div>


<!-- fin modal -->
<!-- modal Informacion productos-->
<div class="modal fade" id="modalInformacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Productos del proveedor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <?php  include_once('productoProv.php'); ?>
          
        </div>
        <div class="modal-footer">
          <input type="hidden" name="ajax">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          
        </div>
      </div>
    </div>
  </div>


<!-- fin modal -->
<!-- Modal Actualizar-->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar datos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="frmnuevoU" method="post" enctype="multipart/form-data" name="frmnuevoU">
            <?php include_once('formularioM.php'); ?>
          </form>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="ajax">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" id="btnActualizar" class="btn btn-primary">Actualizar</button>
        </div>
      </div>
    </div>
  </div>

<!-- fin modal -->


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="../../js/proveedor/validateAdd.js"></script>
    <script src="../../js/proveedor/validateUpdate.js"></script>
    <script src="../../js/proveedor/carga_proveedor.js"></script>
    <script src="../../js/proveedor/formulario.js"></script>
    <script src="../../js/proveedor/CRUD_proveedor.js"></script>
    
   
    
    

   
  </body>
</html>


<script type="text/javascript">

  $(document).ready(function(){
    $('#tablaDatatable').load('tabla.php');
   
    
  });
</script>