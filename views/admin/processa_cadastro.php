
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>My PHP - Home</title>
    <?php require_once("dist/css/css.php"); ?>
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- #region navbar -->
  <!-- Navbar -->
  <?php require_once("layout/navbar.php"); ?>
  <!-- /.navbar -->
  <!-- #endregion -->

  <!-- Main Sidebar Container -->
  <?php require_once("layout/mainSidebar.php"); ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <?php 
          var_dump($_POST);
          var_dump($_GET);
          if(isset( $_POST['nome'])){
          $nome = $_POST['nome'];
          }
          if(isset( $_POST['razaoSocial'])){
          $razaoSocial = $_POST['razaoSocial'];
          }
          if(isset( $_POST['cpf'])){
          $cpf = $_POST['cpf'];
          }
          if(isset( $_POST['nomeFantasia'])){
          $nomeFantasia = $_POST['nomeFantasia'];
          }
          if(isset( $_POST['inscricaoEstadual'])){
          $inscricaoEstadual = $_POST['inscricaoEstadual'];
          }
          if(isset( $_POST['cep'])){
          $cep = $_POST['cep'];
          }
          if(isset( $_POST['logradouro'])){
          $logradouro = $_POST['logradouro'];
          }
          if(isset( $_POST['numero'])){
          $numero = $_POST['numero'];
          }
          if(isset( $_POST['bairro'])){
          $bairro = $_POST['bairro'];
          }
          if(isset( $_POST['cidade'])){
          $cidade = $_POST['cidade'];
          }
          if(isset( $_POST['telefone'])){
          $telefone = $_POST['telefone'];
          }
          if(isset( $_POST['celular'])){
          $celular =  $_POST['celular'];
          }
          ?>
          <div class="col-md-3">
          
          </div>
          <div class="col-md-3">
          
          </div>
          <div class="col-md-3">
          
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <?php require_once("layout/controlSidebar.php"); ?>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php require_once("layout/footer.php"); ?>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php require_once("dist/js/javascript.php"); ?>

</body>
</html>
