@extends('app.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Agentes</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Agentes</li>
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
        <h1>Agregar Agente</h1>
        <br>
          <form action="" method="">
            @csrf
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre" name="name">
              </div>
              <div class="col">
                <label for="exampleInputEmail1">Apellido</label>
                <input type="text" class="form-control" placeholder="Apellido" name="last_name">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Rango</label>
                <select class="form-control" name="rank">
                  <option value="Clase Elite">Clase Elite</option>
                  <option value="Clase Especial">Clase Especial</option>
                  <option value="Clase 1">Clase 1</option>
                  <option value="Clase 2">Clase 2</option>
                  <option value="Clase 3">Clase 3</option>
                </select>
              </div>
              <div class="col">
                <label for="exampleInputEmail1">Número de Placa</label>
                <input type="text" class="form-control" placeholder="000001" name="shell">
              </div>
            </div>
            <br> 
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" class="form-control" placeholder="Correo" name="email">
              </div>
              <div class="col">
                <label for="exampleInputEmail1">Distrito Asignado</label>
                <select class="form-control" name="distrit">
                  <option value="Distrito Shibuya">Distrito Shibuya</option>
                  <option value="Distrito Shinjuku">Distrito Shinjuku</option>
                  <option value="Distrito Aoyama">Distrito Aoyama</option>
                </select>
              </div>
            </div>
            <br> 
            <div class="row">
              <div class="col-lg-6">
                <label for="exampleInputEmail1">Código Sibyl</label>
                <input type="text" class="form-control" placeholder="000001" name="cod_sibyl">
              </div>
            </div>  
            <br>
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Descripción</label>
                <textarea class="form-control" cols="5" rows="5" placeholder="Descripción" name="description"></textarea>
              </div>
            </div>            
            <br>                                
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>        
    </div>
    <br>
      <div>
        <h2>Agentes Registrados</h2>
        <br>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Rango</th>
              <th scope="col">Número de Placa</th>
              <th scope="col">Correo</th>
              <th scope="col">Distrito Asignado</th>
              <th scope="col">Codigo Sibyl</th> 
              <th scope="col">Descripción</th>             
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>Elite Class</td>
              <td>00001</td>
              <td>sibyl@sibyl.com</td>              
              <td>Aoyama</td>
              <td>N/A</td>
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