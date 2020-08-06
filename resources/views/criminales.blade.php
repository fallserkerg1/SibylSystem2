@extends('app.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Criminales</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item active">Criminales</li>
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
      <div>
        <h2>Registrar Criminales</h2>
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
                <label for="exampleInputEmail1">Latencia Criminal</label>
                <input type="text" class="form-control" placeholder="100" name="cri_latent">
              </div>
              <div class="col">
                <label for="exampleInputEmail1">Estado Legal</label>
                <input type="text" class="form-control" placeholder="Terrorista, Sedición, Asesino en Serie...." name="leg_status">
              </div>
            </div>
            <br> 
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Número de Caso</label>
                <input type="email" class="form-control" placeholder="Número de Caso" name="case_reg">
              </div>
              <div class="col">
                <label for="exampleInputEmail1">Celda</label>
                <input type="email" class="form-control" placeholder="0102" name="cell">
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
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection