<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src=" {{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('building.index') }}" class="nav-link">
                    <i class="nav-icon far fa-solid fa-building"></i>
                    <p>
                        Площадки
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-store-alt"></i>
                    <p>
                        Аудитории
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('cabinet.index') }}" class="nav-link">
                            <i class="nav-icon far fa-solid fa-shop"></i>
                            <p>
                                Аудитории
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cabinetType.index') }}" class="nav-link">
                            <i class="nav-icon far fa-solid fa-shop"></i>
                            <p>
                                Тип аудитории
                            </p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-desktop"></i>
                    <p>
                        Оборудование
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('equipment.index') }}" class="nav-link">
                            <i class="nav-icon far fa-solid fa-shop"></i>
                            <p>
                                Оборудование
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('equipmentType.index') }}" class="nav-link">
                            <i class="nav-icon far fa-solid fa-shop"></i>
                            <p>
                                Тип оборудования
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('brand.index') }}" class="nav-link">
                            <i class="nav-icon far fa-solid fa-shop"></i>
                            <p>
                                Марка оборудования
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('model.index') }}" class="nav-link">
                            <i class="nav-icon far fa-solid fa-shop"></i>
                            <p>
                                Модель оборудования
                            </p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-couch"></i>
                    <p>
                        Мебель
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('furniture.index') }}" class="nav-link">
                            <i class="nav-icon far fa-solid fa-shop"></i>
                            <p>
                                Мебель
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('furnitureType.index') }}" class="nav-link">
                            <i class="nav-icon far fa-solid fa-shop"></i>
                            <p>
                                Тип мебели
                            </p>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
