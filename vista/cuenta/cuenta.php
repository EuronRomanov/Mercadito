<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/menu_cuenta.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Mercadito</title>
  </head>
  <body>
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
      <div class="container">
      
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><strong>Mercadito</strong></a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
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
          <a class="dropdown-item" href="../../controlador/login/cerrarSesion.php"> <i class="fa fa-power-off"></i> Logout</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>



<div class="row">
<div class="col-3 align-self-start">
<div id="accordion">
    <div class="class" style="with: 30rem;">
    <div class="card-header">
        <h5 class="accordion-menu">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-13" aria-expanded="false" aria-controls="collapse-13">
                <i class="fa fa-truck"></i>
                Envios
            </a>
        </h5>
    </div>
    <div id="collapse-13" class=collapse data-parent="#accordion">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
            <a  href="../repartidor/repartidor.php"><i class="fas fa-people-carry"></i>
               Repartidor
               </a>
            </li>
            <li class="list-group-item">
            <a  href="../ordenes/ordenes.php"><i class="fas fa-tasks"></i>
               Ordenes
               </a>
            </li>
        </ul>
    </div>
    <div class="card-header">
    <h5 class="accordion-menu">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-14" aria-expanded="false" aria-controls="collapse-14">
                <i class="fa fa-file"></i>
                Reportes
            </a>
        </h5>
    </div>
    <div id="collapse-14" class=collapse data-parent="#accordion">
    <ul class="list-group list-group-flush">
            <li class="list-group-item">
            <a  href="../mercaderia/mercaderia.php"><i class="fas fa-dolly"></i>
                      Entrada de mercaderia
                      </a>
            </li>
            <li class="list-group-item">
                <i class="fa fa-inbox"></i>
                inbox
            </li>
        </ul>
    </div>
    <div class="card-header">
    <h5 class="accordion-menu">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-15" aria-expanded="false" aria-controls="collapse-15">
            <i class="fas fa-boxes"></i>
                Mercaderia
            </a>
        </h5>
    </div>
    <div id="collapse-15" class=collapse data-parent="#accordion">
          <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                  <a  href="../producto/producto.php"><i class="fa fa-shopping-bag"></i>
                      producto
                      </a>
                  </li>
                  <li class="list-group-item">
                  <a  href="../proveedor/proveedor.php"><i class="fa fa-industry"></i>
                      proveedor
                      </a>
                  </li>
                  <li class="list-group-item">
                  <a  href="../categoria/categoria.php"><i class="fa fa-tags"></i>
                      categoria
                      </a>
                  </li>
                  <li class="list-group-item">
                  <a  href="../promocion/promocion.php"><i class="fa fa-percent"></i>
                      descuento
                      </a>
                  </li>
          </ul>
    </div>

    <div class="card-header">
        <h5 class="accordion-menu">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-16" aria-expanded="false" aria-controls="collapse-16">
                <i class="fa fa-question-circle"></i>
                Ayuda
            </a>
        </h5>
    </div>
    <div id="collapse-16" class=collapse data-parent="#accordion">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
            <a  href="#"><i class="fa fa-info-circle"></i>
               Manual
               </a>
            </li>
        </ul>
    </div>
    </div>
</div>
</div>
<div class="col-9"></div>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
