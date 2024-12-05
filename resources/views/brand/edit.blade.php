@extends('layouts.admin.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование марки оборудования</h1>
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
                    <form method="post" action="{{ route('brand.update', $brand->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Название марки</label>
                                <input type="text" name="title" value="{{ old('title') ? old('title') : $brand->title }}" class="form-control"  placeholder="Название марки">
                                @error('title')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Тип аудитории</label>
                                <select name="type_equipment_id" class="form-control">
                                    @foreach($equipmentTypes as $equipmentType)
                                        <option
                                            {{ $brand->type_equipment_id === $equipmentType->id ? ' selected' : '' }}
                                            value="{{ $equipmentType->id }}">{{ $equipmentType->title }}</option>
                                    @endforeach
                                </select>
                                @error('type_equipment_id')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- /.card-body -->

                        <div class="ml-4">
                            <button type="submit" class="btn btn-success">Обновить</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection