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
        <h1>Editar Agente</h1>
        <br>
          <form method="POST" action="{{ route('update_agente', $fila)}}">
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
                  <option value="Clase Elite">Clase Elite</option>
                  <option value="Clase Especial">Clase Especial</option>
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
                <label for="exampleInputEmail1">Distrito Asignado</label>
                <select class="form-control" name="distrit" {{ $fila->distrit}}>
                  <option value="Distrito Adachi">Distrito Adachi</option>
                  <option value="Distrito Arakawa">Distrito Arakawa</option>
                  <option value="Distrito Bunkyo">Distrito Bunkyo</option>
                  <option value="Distrito Chiyoda">Distrito Chiyoda</option>
                  <option value="Distrito Chūō">Distrito Chūō</option>
                  <option value="Distrito Edogawa">Distrito Edogawa</option>
                  <option value="Distrito Itabashi">Distrito Itabashi</option>
                  <option value="Distrito Katsushika">Distrito Katsushika</option>
                  <option value="Distrito Kito">Distrito Kito</option>
                  <option value="Distrito Koto">Distrito Koto</option>
                  <option value="Distrito Meguro">Distrito Meguro</option>
                  <option value="Distrito Minato">Distrito Minato</option>
                  <option value="Distrito Nakano">Distrito Nakano</option>
                  <option value="Distrito Nerima">Distrito Nerima</option>
                  <option value="Distrito Ota">Distrito Ota</option>
                  <option value="Distrito Setagaya">Distrito Setagaya</option>
                  <option value="Distrito Shibuya">Distrito Shibuya</option>
                  <option value="Distrito Shinagawa">Distrito Shinagawa</option>
                  <option value="Distrito Shinjuku">Distrito Shinjuku</option>
                  <option value="Distrito Suginami">Distrito Suginami</option>
                  <option value="Distrito Sumida">Distrito Sumida</option>
                  <option value="Distrito Toshima">Distrito Toshima</option>
                  <option value="Distrito Taitō">Distrito Taitō</option>                                              
                </select>
              </div>
            </div>
            <br> 
            <div class="row">
              <div class="col-lg-6">
                <label for="exampleInputEmail1">Código Sibyl</label>
                <input type="text" class="form-control" name="cod_sibyl" value="{{ $fila->cod_sibyl}}">
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
            <a class="btn btn-primary" href="{{route('agentes')}}">Volver</a>
          </form>  
          <br>
          <br>
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