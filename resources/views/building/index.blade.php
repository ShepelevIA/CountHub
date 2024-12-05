@extends('layouts.admin.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Площадки</h1>
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
                        <a href="{{ route('building.create') }}">
                            <button type="button" class="btn btn-block bg-gradient-primary btn-sm">Добавить</button>
                        </a>
                    </div>
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th></th>
                            <th>#</th>
                            <th>Название</th>
                            <th>Адрес</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($buildings as $building)
                        <tr>

                            <td>
                                <a href="{{ route('building.show', $building->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                            <td>{{ $building->id }}</td>
                            <td>{{ $building->title }}</td>
                            <td>{{ $building->address }}</td>

                            <td>
                                    <a href="{{ route('building.edit', $building->id) }}">
                                    <button type="button" class="btn btn-block bg-gradient-success btn-sm w-75">
                                        Редактировать
                                    </button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('building.destroy', $building->id) }}" method="post">
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
