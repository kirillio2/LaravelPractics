@extends('layouts.admin_layout')

@section('title', 'Расписание')
@section('content')
    {{-- <style>
@media (max-width: 767px) {
    .table td,
    .table th {
        font-size: 12px; /* Размер шрифта для мобильных устройств */
    }
}
</style> --}}

<div class="container">
    <h2>Справки</h2>
    <div class="card-deck align-items-stretch">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('admin/images/reference/12.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Справка с места учёбы</h5>
                    <div class="card-divider"></div>
                    <p class="card-text">
                        <hr>
                        Документ, подтверждающий факт обучения в учебном заведении, если обучение не закончено
                        должным образом или не получен диплом.
                    </p>
                </div>
                <a class="btn btn-app">
                    <i class="fas fa-plus"></i>Заказать
                </a>
                <div class="card-footer">
                    <small class="text-muted">Онлайн - формируется в течении 3-х рабочих дней</small>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('admin/images/reference/12.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Справка с места учёбы</h5>
                    <div class="card-divider"></div>
                    <p class="card-text">
                        <hr>
                        Документ, подтверждающий факт обучения в учебном заведении, если обучение не закончено
                        должным образом или не получен диплом.
                    </p>
                </div>
                <a class="btn btn-app">
                    <i class="fas fa-plus"></i>Заказать
                </a>
                <div class="card-footer">
                    <small class="text-muted">Онлайн - формируется в течении 3-х рабочих дней</small>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('admin/images/reference/12.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Справка с места учёбы</h5>
                    <div class="card-divider"></div>
                    <p class="card-text">
                        <hr>
                        Документ, подтверждающий факт обучения в учебном заведении, если обучение не закончено
                        должным образом или не получен диплом.
                    </p>
                </div>
                <a class="btn btn-app">
                    <i class="fas fa-minus"></i>Заказана
                </a>
                <div class="card-footer">
                    <small class="text-muted">Онлайн - формируется в течении 3-х рабочих дней</small>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('admin/images/reference/12.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> Документ, подтверждающий факт обучения в учебном заведении, если обучение не закончено должным образом или не получен диплом.</h5>
                    <div class="card-divider"></div>
                    <p class="card-text">
                        <hr>
                        Документ, подтверждающий факт обучения в учебном заведении, если обучение не закончено
                        должным образом или не получен диплом.
                    </p>
                </div>
                <a class="btn btn-app">
                    <i class="fas fa-minus"></i>Заказана
                </a>
                <div class="card-footer">
                    <small class="text-muted">Онлайн - формируется в течении 3-х рабочих дней</small>
                </div>
            </div>
        </div>

        <div class="col-md-4  mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('admin/images/reference/12.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Справка с места учёбы</h5>
                    <div class="card-divider"></div>
                    <p class="card-text">
                        <hr>
                        Документ, подтверждающий факт обучения в учебном заведении, если обучение не закончено
                        должным образом или не получен диплом.
                    </p>
                </div>
                <a class="btn btn-app">
                    <i class="fas fa-minus"></i>Заказана
                </a>
                <div class="card-footer">
                    <small class="text-muted">Онлайн - формируется в течении 3-х рабочих дней</small>
                </div>
            </div>
        </div>

        <div class="col-md-4  mb-4">
            <div class="card h-100 ">
                <img class="card-img-top" src="{{ asset('admin/images/reference/12.svg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Справка с места учёбы</h5>
                    <div class="card-divider"></div>
                    <p class="card-text">
                        <hr>
                        Документ, подтверждающий факт обучения в учебном заведении, если обучение не закончено
                        должным образом или не получен диплом.
                    </p>
                </div>
                <a class="btn btn-app">
                    <i class="fas fa-minus"></i>Заказана
                </a>
                <div class="card-footer">
                    <small class="text-muted">Онлайн - формируется в течении 3-х рабочих дней</small>
                </div>
            </div>
        </div>

    </div>
</div>




    <div class="container">
    <div class="card-body p-0">
        <div class="table-responsive"> <!-- Добавлен класс для создания адаптивной таблицы -->
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 25%"> <!-- Уменьшил ширину колонки с названием -->
                            Справка
                        </th>
                        <th style="width: 15%"> <!-- Увеличил ширину колонки с прогрессом -->
                            Прогресс
                        </th>
                        <th style="width: 20%" class="text-center"> <!-- Уменьшил ширину колонки со статусом -->
                            Статус
                        </th>
                        <th style="width: 10%" class="text-right"> <!-- Уменьшил ширину колонки с кнопкой скачать -->
                            Скачать
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a>
                                Справка в военкомат
                            </a>
                            <br>
                            <small>
                                Создано 19.12.2023-16:57
                            </small>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm bg-secondary">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="57"
                                aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                            </div>
                            
                            </div>
                            <small>
                                57% Загружено
                            </small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Создана</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-upload"></i>
                                Скачать
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a>
                                Справка в военкомат
                            </a>
                            <br>
                            <small>
                                Создано 19.12.2023-16:57
                            </small>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm bg-secondary">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="57"
                                aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                            </div>
                            
                            </div>
                            <small>
                                57% Загружено
                            </small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Создана</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-upload"></i>
                                Скачать
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a>
                                Справка в военкомат
                            </a>
                            <br>
                            <small>
                                Создано 19.12.2023-16:57
                            </small>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm bg-secondary">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="57"
                                aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                            </div>
                            
                            </div>
                            <small>
                                57% Загружено
                            </small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Создана</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-upload"></i>
                                Скачать
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a>
                                Справка в военкомат
                            </a>
                            <br>
                            <small>
                                Создано 19.12.2023-16:57
                            </small>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm bg-secondary">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="57"
                                aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                            </div>
                            
                            </div>
                            <small>
                                57% Загружено
                            </small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Создана</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-upload"></i>
                                Скачать
                            </a>
                        </td>
                    </tr>
                    <!-- Добавьте другие строки таблицы здесь -->
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
