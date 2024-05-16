@extends('layouts.admin')

@section('title')
User List
@endsection

@section('contenido')

<div class="bg-light rounded">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Usuarios</h4>
            <h6 class="card-subtitle mb-2 text-muted">Administrador de usuarios.</h6>

            <div class="mt-2"></div>

            <div class="mb-2 text-end">
                <a href="" class="btn btn-primary btn-sm float-right">Add user</a>
            </div>
            <br><br>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" width="1%">#</th>
                        <th scope="col" width="15%">Documento Identidad</th>
                        <th scope="col">Nombres Completo</th>
                        <th scope="col" width="10%">Apellidos</th>
                        <th scope="col" width="10%">Correo Electrónico</th>
                        <th scope="col" width="10%">Telefono</th>
                        <th scope="col" width="10%">Opciones</th>
                        <th scope="col" width="1%" colspan="3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuario as $usuario)
                        <tr>
                            <th scope="row">{{ $usuario->id }}</th>
                            <td>{{ $usuario->documento_identidad }}</td>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->apellido }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->telefono }}</td>
                            <td><a href="" class="btn btn-warning btn-sm">Show</a></td>
                            <td><a href="" class="btn btn-info btn-sm">Edit</a></td>
                            <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex"></div>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </div>
    </div>
</div>

@endsection
