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
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
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
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Latencia Criminal</th>
              <th scope="col">Estado Legal</th>
              <th scope="col">Número de Caso</th>
              <th scope="col">Celda</th>
              <th scope="col">Descripción</th>            
              <th scope="col">Acciones</th>                         
            </tr>
          </thead>
          <tbody>
   @foreach($datos as $fila)         
            <tr>
              <td>{{$fila->name}}</td>
              <td>{{$fila->last_name}}</td>
              <td>{{$fila->cri_latent}}</td>
              <td>{{$fila->leg_status}}</td>
              <td>{{$fila->case_reg}}</td>              
              <td>{{$fila->cell}}</td>
              <td>{{$fila->description}}</td>             
              <td><a class="btn btn-success" href="">Editar</a>                 
                <form method="POST" action="">
                  @csrf @method('DELETE')
                    <button class="btn btn-danger">Eliminar</button>
                </form></td>
            </tr>
          </tbody>
  @endforeach
        </table>
      </div>
      </div>     
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection