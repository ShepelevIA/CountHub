@extends('layouts.admin.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление аудитории</h1>
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
                    <form method="post" action="{{ route('cabinet.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Название аудитории</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control"  placeholder="Название аудитории">
                                @error('title')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Номер аудитории</label>
                                <input type="number" name="number_cabinet" value="{{ old('number_cabinet') }}" class="form-control"  placeholder="Номер аудитории">
                                @error('number_cabinet')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Этаж</label>
                                <input type="number" name="floor" value="{{ old('floor') }}" class="form-control"  placeholder="Этаж">
                                @error('floor')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Тип аудитории</label>
                                <select name="type_cabinet_id" class="form-control">
                                    @foreach($cabinetTypes as $cabinetType)
                                        <option
                                            {{ old('type_cabinet_id') == $cabinetType->id ? ' selected' : '' }}
                                            value="{{ $cabinetType->id }}">{{ $cabinetType->title }}</option>
                                    @endforeach
                                </select>
                                @error('type_cabinet_id')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Площадка</label>
                                <select name="building_id" class="form-control">
                                    @foreach($buildings as $building)
                                    <option
                                        {{ old('building_id') == $building->id ? ' selected' : '' }}
                                        value="{{ $building->id }}">{{ $building->title }}</option>
                                    @endforeach
                                </select>
                                @error('building_id')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="ml-4">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
