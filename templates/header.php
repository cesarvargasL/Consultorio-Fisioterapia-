<?php
$url_base="http://localhost/Clinica/";

?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>

  <!-- place navbar here -->
  </header>

  <nav class="navbar navbar-expand navbar-light bg-light">
  <style>
  .navbar {
    background-color: #b695c0 !important;
  }
  .navbar .nav-link {
      color: #004548;
    }
  /* nav.navbar ul.nav li {

    color: orange
} */
/* Implementacion del estilo */
</style>      
  <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo $url_base;?>secciones/sistema/index.php" aria-current="page">Inicio<span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url_base;?>secciones/pacientes/">Pacientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url_base;?>secciones/usuarios/">Usuarios</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo $url_base;?>secciones/puestos/">Puestos</a>
            </li> -->
            <li class="nav-item">

                <a class="nav-link" href="../../index.php">Cerrar Sesion</a>
            </li>
        </ul>
    </nav>
    
  <main class="container">