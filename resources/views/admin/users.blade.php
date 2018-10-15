@extends('vendor.adminlte.layouts.app')

@section('contentheader_title')
    <h1>Usuarios</h1>
@endsection

@section('contentheader_description')
    <hr>
   <div align="right">
       <button class="btn btn-success" id="adduser" data-toggle="modal" data-target="#exampleModalCenter">Agregar Usuario</button>
   </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" type="text/css">
@endsection
@section('content')
    <table class="table table-striped table-bordered" id="userTable">
        <thead>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Correo</th>
        <th>Acciones</th>
        </thead>

    </table>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="exampleModalLongTitle">Nuevo Usuario</h3>
                </div>
                <div class="modal-body">
                    <form id="userForm" style="margin: 5%;">
                        {{csrf_field()}}
                        <div class="row">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control">
                        </div>
                        <div class="row">
                            <label for="ape_pat">Apellido Paterno</label>
                            <input type="text" class="form-control" name="ape_pat" id="ape_pat">
                        </div>
                        <div class="row">
                            <label for="ape_mat">Apellido Materno</label>
                            <input type="text" class="form-control" name="ape_mat" id="ape_mat">
                        </div>
                        <div class="row">
                            <label for="email">Correo</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="pass">Contraseña</label>
                                <input type="password" id="pass" name="pass" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="confirm">Confirmar</label>
                                <input type="password" id="confirm" name="confirm" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="guardar">Guardar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('/js/admin/users.js')}}"></script>
@endsection