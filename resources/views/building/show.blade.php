@extends('layouts.admin.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Просмотр площадки</h1>
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
                        <a href="{{ route('building.edit', $building->id) }}">
                            <button type="button" class="btn btn-block bg-gradient-success btn-sm">
                                Редактировать
                            </button>
                        </a>
                    </div>
                    <div class="col-2 mb-3">
                        <form action="{{ route('building.destroy', $building->id) }}" method="post">
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
                            <td>{{ $building->id }}</td>
                        </tr>
                        <tr>
                            <td>Название</td>
                            <td>{{ $building->title }}</td>
                        </tr>
                        <tr>
                            <td>Адрес</td>
                            <td>{{ $building->address }}</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                @for($i = 1; $i <= $countFloor; $i++)
                        <div class="card-body">
                            <div class="card-header">
                                <h2 class="card-title">{{ $i }} этаж</h2>
                            </div>
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Название</th>
                                    <th>Номер</th>
                                    <th>Тип аудитории</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($building->cabinets->where('floor', $i) as $cabinet)
                                    <tr>

                                        <td>
                                            <a href="{{ route('cabinet.show', $cabinet->id) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                        <td>{{ $cabinet->title }}</td>
                                        <td>{{ $cabinet->number_cabinet }}</td>
                                        <td>{{ $cabinet->cabinetTypes->title }}</td>

                                        <td>
                                            <a href="{{ route('cabinet.edit', $cabinet->id) }}">
                                                <button type="button" class="btn btn-block bg-gradient-success btn-sm w-75">
                                                    Редактировать
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('cabinet.destroy', $cabinet->id) }}" method="post">
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
                @endfor
                <div class="col-2 mb-3">
                    <a href="{{ route('cabinet.create') }}">
                        <button type="button" class="btn btn-block bg-gradient-primary btn-sm">Добавить</button>
                    </a>
                </div>


            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
