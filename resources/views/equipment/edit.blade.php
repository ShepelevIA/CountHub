@extends('layouts.admin.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование оборудования</h1>
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
                    <form method="post" action="{{ route('equipment.update', $equipment->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Инвентарный номер</label>
                                <input type="integer" name="inventory_number" value="{{ old('inventory_number') ? old('inventory_number') : $equipment->inventory_number }}" class="form-control"  placeholder="Инвентарный номер">
                                @error('inventory_number')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Оборудование</label>
                                <select name="model_id" class="form-control">
                                    @foreach($models as $model)
                                        <option
                                            {{ $equipment->model_id === $model->id ? ' selected' : '' }}
                                            value="{{ $model->id }}">{{$model->brands->equipmentTypes->title . ' ' . $model->brands->title . ' ' . $model->title }}</option>
                                    @endforeach
                                </select>
                                @error('model_id')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Кабинет</label>
                                <select name="cabinet_id" class="form-control">
                                    @foreach($cabinets as $cabinet)
                                        <option
                                            {{ $equipment->cabinet_id === $cabinet->id ? ' selected' : '' }}
                                            value="{{ $cabinet->id }}">{{$cabinet->cabinetTypes->title . ' ' . $cabinet->buildings->title . ' ' . $cabinet->number_cabinet }}</option>
                                    @endforeach
                                </select>
                                @error('cabinet_id')
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
