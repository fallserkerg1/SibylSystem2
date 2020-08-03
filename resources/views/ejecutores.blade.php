@extends('app.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Ejecutores</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ejecutores</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- CONTENIDO AQUI -->
        <h1>Agregar Ejecutor</h1>
        <br>
          <form>
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>
          </form>        
    </div>
    <br>
      <div>
        <h2>Ejecutores Registrados</h2>
        <br>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
              <th scope="col">Last</th>
              <th scope="col">Acciones</th>              
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Otto</td>
              <td>@mdo</td>              
              <td>Otto</td>
              <td><a class="btn btn-success" href="">Editar</a> <a class="btn btn-danger" href="">Eliminar</a></td>
            </tr>
          </tbody>
        </table>
      </div> 
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection