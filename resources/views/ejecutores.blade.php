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
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
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

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Agregar Agente</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('ejec_store')}}">
                @csrf
            <div class="card-body">
              <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="name">
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Apellido</label>
                      <input type="text" class="form-control" placeholder="Apellido" name="last_name">
                    </div>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Rango</label>
                <select class="form-control" name="rank">
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
                <label for="exampleInputEmail1">Agente Asignado</label>
                <select class="form-control" name="agente">
                  <option value="Ginoza Nobuchica">Ginoza Nobuchica</option>>
                </select>
              </div>
            </div>
            <br> 
            <div class="row">
              <div class="col-lg-6">
                <label for="exampleInputEmail1">Coeficiente Criminal</label>
                <input type="text" class="form-control" placeholder="100" name="co_criminal">
              </div>
            </div>  
            <br>
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Descripción</label>
                <textarea class="form-control" cols="5" rows="5" placeholder="Descripción" name="description"></textarea>
              </div>
            </div> 

              </div>                                       
                <!-- /.card-body -->
                <div class="card-footer">
            <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              </form>
            </div>        
    </div>
    <br>
      <div>
        <h2>Ejecutores Registrados</h2>
        <br>
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Rango</th>
              <th scope="col">Placa</th>
              <th scope="col">Correo</th>              
              <th scope="col">Agente Asignado</th>
              <th scope="col">Coeficinete Criminal</th>
              <th scope="col">Descripción</th>     
              <th scope="col">Acciones</th>                         
            </tr>
          </thead>
          <tbody>
   @foreach($datos as $fila)         
            <tr>
              <td>{{ $fila->name}}</td>
              <td>{{ $fila->last_name}}</td>
              <td>{{ $fila->rank}}</td>
              <td>{{ $fila->shell}}</td>              
              <td>{{ $fila->email}}</td>
              <td>{{ $fila->agente}}</td>              
              <td>{{ $fila->co_criminal}}</td>
              <td>{{ $fila->description}}</td>              
              <td><a class="btn btn-success" href="{{ route('edit_ejec', $fila)}}">Editar</a>                 
                <form method="POST" action="{{ route('destroy_ejec',$fila)}}">
                  @csrf @method('DELETE')
                    <button class="btn btn-danger">Eliminar</button>
                </form></td>
            </tr>
          </tbody>
  @endforeach
        </table>
      </div>
      </div> 
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection