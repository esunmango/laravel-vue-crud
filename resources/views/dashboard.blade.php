@extends('app')

@section('content')

    <div id="crud" class="row">
        <div class="col-xl-12">
            <h1 class="card-header">CRUD laravel y vue</h1>
        </div>
        <div class="col-sm-7">
            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#create">Nueva tarea</a>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Tarea</td>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="keep in keeps">
                        <td style="width: 10px;">@{{ keep.id }}</td>
                        <td>@{{ keep.keep }}</td>
                        <td style="width: 10px;">
                            <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#create">Editar</a>
                        </td>
                        <td style="width: 10px;">
                            <a class="btn btn-danger btn-sm" v-on:click.prevent="deleteKeep(keep)">Borrar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            @include('create')
        </div>
        <div class="col-sm-5">
            <pre>
                @{{ $data }}
            </pre>
        </div>
    </div>

@endsection