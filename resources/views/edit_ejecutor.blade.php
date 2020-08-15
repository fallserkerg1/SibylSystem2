<!DOCTYPE html>
<html>
<head>
  <title>Editar Agente</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

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
            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
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
      <div class="container">

      <!-- CONTENIDO AQUI -->
        <h1>Editar Ejecutor</h1>
         <form method="POST" action="{{ route('update_ejecutor', $fila)}}">
            @csrf @method('PATCH')
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{ $fila->name}}">
              </div>
              <div class="col">
                <label for="exampleInputEmail1">Apellido</label>
                <input type="text" class="form-control" name="last_name" value="{{ $fila->last_name}}">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Rango</label>
                <select class="form-control" name="rank" value="{{ $fila->rank}}">
                  <option value="Clase 1">Clase 1</option>
                  <option value="Clase 2">Clase 2</option>
                  <option value="Clase 3">Clase 3</option>
                </select>
              </div>
              <div class="col">
                <label for="exampleInputEmail1">Número de Placa</label>
                <input type="text" class="form-control" name="shell" value="{{ $fila->shell}}">
              </div>
            </div>
            <br> 
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" class="form-control" name="email" value="{{ $fila->email}}">
              </div>
              <div class="col">
                <label for="exampleInputEmail1">Agente Asignado</label>
                <select class="form-control" name="agente" value="{{ $fila->agente}}">
                  <option value="Ginoza Nobuchica">Ginoza Nobuchica</option>>
                </select>
              </div>
            </div>
            <br> 
            <div class="row">
              <div class="col-lg-6">
                <label for="exampleInputEmail1">Coeficiente Criminal</label>
                <input type="text" class="form-control" name="co_criminal" value="{{ $fila->co_criminal}}">
              </div>
            </div>  
            <br>
            <div class="row">
              <div class="col">
                <label for="exampleInputEmail1">Descripción</label>
                <input class="form-control" cols="5" rows="5" name="description" value="{{ $fila->description}}">
              </div>
            </div>            
            <br>                                
            <button type="submit" class="btn btn-success">Editar</button>
            <a class="btn btn-primary" href="{{route('ejecutores')}}">Volver</a>            
          </form>                    
      </div>          
    </div> 
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>