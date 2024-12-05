@extends('layouts.admin.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Просмотр аудитории</h1>
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
                        <a href="{{ route('cabinet.edit', $cabinet->id) }}">
                            <button type="button" class="btn btn-block bg-gradient-success btn-sm">
                                Редактировать
                            </button>
                        </a>
                    </div>
                    <div class="col-2 mb-3">
                        <form action="{{ route('cabinet.destroy', $cabinet->id) }}" method="post">
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
                            <td>{{ $cabinet->id }}</td>
                        </tr>
                        <tr>
                            <td>Название</td>
                            <td>{{ $cabinet->title }}</td>
                        </tr>
                        <tr>
                            <td>Номер</td>
                            <td>{{ $cabinet->number_cabinet }}</td>
                        </tr>
                        <tr>
                            <td>Этаж</td>
                            <td>{{ $cabinet->floor }}</td>
                        </tr>
                        <tr>
                            <td>Площадка</td>
                            <td>{{ $cabinet->buildings->title }}</td>
                        </tr>
                        <tr>
                            <td>Тип аудитирии</td>
                            <td>{{ $cabinet->cabinetTypes->title }}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <div class="card-header">
                        <h2 class="card-title">Оборудование</h2>
                    </div>
                    <div class="col-2 mb-1 mt-1">
                        <a href="{{ route('equipment.create') }}">
                            <button type="button" class="btn btn-block bg-gradient-primary btn-sm">Добавить</button>
                        </a>
                    </div>
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th></th>
                            <th>#</th>
                            <th>Инвентарный номер</th>
                            <th>Тип оборудования</th>
                            <th>Марка</th>
                            <th>Модель</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cabinet->equipments as $equipment)
                            <tr>

                                <td>
                                    <a href="{{ route('equipment.show', $equipment->id) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                                <td>{{ $equipment->id }}</td>
                                <td>{{ $equipment->inventory_number }}</td>
                                <td>{{ $equipment->models->brands->equipmentTypes->title }}</td>
                                <td>{{ $equipment->models->brands->title }}</td>
                                <td>{{ $equipment->models->title }}</td>

                                <td>
                                    <a href="{{ route('equipment.edit', $equipment->id) }}">
                                        <button type="button" class="btn btn-block bg-gradient-success btn-sm w-75">
                                            Редактировать
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('equipment.destroy', $equipment->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">
                                            Удалить
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-body">
                    <div class="card-header">
                        <h2 class="card-title">Мебель</h2>
                    </div>
                    <div class="col-2 mb-1 mt-1">
                        <a href="{{ route('equipment.create') }}">
                            <button type="button" class="btn btn-block bg-gradient-primary btn-sm">Добавить</button>
                        </a>
                    </div>
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th></th>
                            <th>#</th>
                            <th>Инвентарный номер</th>
                            <th>Тип мебели</th>
                            <th>Цвет</th>
                            <th>Аудитория</th>
                            <th>Площадка</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cabinet->furnitures as $furniture)
                            <tr>

                                <td>
                                    <a href="{{ route('furniture.show', $furniture->id) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                                <td>{{ $furniture->id }}</td>
                                <td>{{ $furniture->inventory_number }}</td>
                                <td>{{ $furniture->furnitureTypes->title }}</td>
                                <td>{{ $furniture->color }}</td>
                                <td>{{ $furniture->cabinets->number_cabinet }}</td>
                                <td>{{ $furniture->cabinets->buildings->title }}</td>

                                <td>
                                    <a href="{{ route('furniture.edit', $furniture->id) }}">
                                        <button type="button" class="btn btn-block bg-gradient-success btn-sm w-75">
                                            Редактировать
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('furniture.destroy', $furniture->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">
                                            Удалить
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
