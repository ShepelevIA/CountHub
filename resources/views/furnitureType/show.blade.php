@extends('layouts.admin.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Просмотр типа мебели</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                    <div class="col-2 mb-3">
                        <a href="{{ route('furnitureType.edit', $furniture_type->id) }}">
                            <button type="button" class="btn btn-block bg-gradient-success btn-sm">
                                Редактировать
                            </button>
                        </a>
                    </div>
                    <div class="col-2 mb-3">
                        <form action="{{ route('furnitureType.destroy', $furniture_type->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">
                                Удалить
                            </button>
                        </form>
                    </div>
                    <table class="table table-head-fixed text-nowrap">

                        <tbody>

                        <tr>
                            <td>ID</td>
                            <td>{{ $furniture_type->id }}</td>
                        </tr>
                        <tr>
                            <td>Название</td>
                            <td>{{ $furniture_type->title }}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
