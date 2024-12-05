@extends('layouts.admin.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Просмотр оборудования</h1>
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
                        <a href="{{ route('equipment.edit', $equipment->id) }}">
                            <button type="button" class="btn btn-block bg-gradient-success btn-sm">
                                Редактировать
                            </button>
                        </a>
                    </div>
                    <div class="col-2 mb-3">
                        <form action="{{ route('equipment.destroy', $equipment->id) }}" method="post">
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
                            <td>{{ $equipment->id }}</td>
                        </tr>
                        <tr>
                            <td>Инвентарный номер</td>
                            <td>{{ $equipment->inventory_number }}</td>
                        </tr>
                        <tr>
                            <td>Оборудование</td>
                            <td>{{ $equipment->models->brands->equipmentTypes->title . ' ' . $equipment->models->brands->title . ' ' . $equipment->models->title }}</td>
                        </tr>
                        <tr>
                            <td>Аудитория</td>
                            <td>{{ $equipment->cabinets->buildings->title . ' ' . $equipment->cabinets->number_cabinet }}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
