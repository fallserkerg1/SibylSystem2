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
      <!-- CONTENIDO AQUI -->
        <h1>Agregar Agente</h1>
        <br>
          <form method="POST" action="{{route('store')}}">
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
              <th scope="col">Acciones</th>                          
            </tr>
          </thead>
          <tbody>
      @foreach($datos as $fila)
            <tr>
              <th scope="row">{{ $fila->id}}</th>
              <td>{{ $fila->name}}</td>
              <td>{{ $fila->last_name}}</td>
              <td>{{ $fila->rank}}</td>
              <td>{{ $fila->shell}}</td>
              <td>{{ $fila->email}}</td>              
              <td>{{ $fila->distrit}}</td>
              <td>{{ $fila->cod_sibyl}}</td>
              <td>{{ $fila->description}}</td>              
              <td><a type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Editar</a>
              <a class="btn btn-danger" href="">Eliminar</a></td>
            </tr>
          </tbody>
        @endforeach
        </table>
      </div> 
  </section>
  <!-- /.content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>
<!-- /.content-wrapper -->

@endsection