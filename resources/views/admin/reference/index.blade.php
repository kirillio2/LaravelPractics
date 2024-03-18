@extends('layouts.admin_layout')

@section('title', 'Расписание')
@section('content')

    <style>
        .rounded-custom {
            border-radius: 20px;
        }
    </style>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Справки</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card rounded-custom">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Все доступные справки</h3>
            </div>
            <div class="card-body">
                <div class="card-deck align-items-stretch">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('admin/images/reference/12.svg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Справка с места учёбы</h5>
                                <div class="card-divider"></div>
                                <p class="card-text">
                                    <hr>
                                    Документ, подтверждающий факт обучения в учебном заведении, если обучение не закончено
                                    должным образом или не получен диплом.
                                </p>
                            </div>
                            <a class="btn btn-app" data-toggle="modal" data-target="#modal-default">
                                <i class="fas fa-plus"></i>Заказать
                            </a>
                            <div class="card-footer">
                                <small class="text-muted">Онлайн - формируется в течении 3-х рабочих дней</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('admin/images/reference/12.svg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Справка с места учёбы</h5>
                                <div class="card-divider"></div>
                                <p class="card-text">
                                    <hr>
                                    Документ, подтверждающий факт обучения в учебном заведении, если обучение не закончено
                                    должным образом или не получен диплом.
                                </p>
                            </div>
                            <a class="btn btn-app" data-toggle="modal" data-target="#modal-default">
                                <i class="fas fa-plus"></i>Заказать
                            </a>
                            <div class="card-footer">
                                <small class="text-muted">Онлайн - формируется в течении 3-х рабочих дней</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('admin/images/reference/12.svg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Справка с места учёбы</h5>
                                <div class="card-divider"></div>
                                <p class="card-text">
                                    <hr>
                                    Документ, подтверждающий факт обучения в учебном заведении, если обучение не закончено
                                    должным образом или не получен диплом.
                                </p>
                            </div>
                            <a class="btn btn-app" data-toggle="modal" data-target="#modal-default">
                                <i class="fas fa-plus"></i>Заказать
                            </a>
                            <div class="card-footer">
                                <small class="text-muted">Онлайн - формируется в течении 3-х рабочих дней</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('admin/images/reference/12.svg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"> Документ, подтверждающий факт обучения в учебном заведении, если
                                    обучение не
                                    закончено должным образом или не получен диплом.</h5>
                                <div class="card-divider"></div>
                                <p class="card-text">
                                    <hr>
                                    Документ, подтверждающий факт обучения в учебном заведении, если обучение не закончено
                                    должным образом или не получен диплом.
                                </p>
                            </div>
                            <a class="btn btn-app" data-toggle="modal" data-target="#modal-default">
                                <i class="fas fa-plus"></i>Заказать
                            </a>
                            <div class="card-footer">
                                <small class="text-muted">Онлайн - формируется в течении 3-х рабочих дней</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4  mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('admin/images/reference/12.svg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Справка с места учёбы</h5>
                                <div class="card-divider"></div>
                                <p class="card-text">
                                    <hr>
                                    Документ, подтверждающий факт обучения в учебном заведении, если обучение не закончено
                                    должным образом или не получен диплом.
                                </p>
                            </div>
                            <a class="btn btn-app" data-toggle="modal" data-target="#modal-default">
                                <i class="fas fa-plus"></i>Заказать
                            </a>
                            <div class="card-footer">
                                <small class="text-muted">Онлайн - формируется в течении 3-х рабочих дней</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4  mb-4">
                        <div class="card h-100 ">
                            <img class="card-img-top" src="{{ asset('admin/images/reference/12.svg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Справка с места учёбы</h5>
                                <div class="card-divider"></div>
                                <p class="card-text">
                                    <hr>
                                    Документ, подтверждающий факт обучения в учебном заведении, если обучение не закончено
                                    должным образом или не получен диплом.
                                </p>
                            </div>
                            <a class="btn btn-app" data-toggle="modal" data-target="#modal-default">
                                <i class="fas fa-plus"></i>Заказать
                            </a>
                            <div class="card-footer">
                                <small class="text-muted">Онлайн - формируется в течении 3-х рабочих дней</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="content" id="references">
        <div class="card rounded-custom">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Файлы на загрузке</h3>
            </div>
            <div class="card-body">
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
                                <th style="width: 10%" class="text-right">
                                    <!-- Уменьшил ширину колонки с кнопкой скачать -->
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
    </section>


    <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>One fine body…</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary swalDefault">Заказать</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Обработчик события для кнопки
        document.querySelector('.swalDefault').addEventListener('click', function() {

            // После успешного заказа закрываем модальное окно
            $('#modal-default').modal('hide');

            // Предположим, что у вас есть переменная isSuccess, которая указывает на успешность операции
            var isSuccess = true; // Измените на false, чтобы увидеть сообщение об ошибке

            if (isSuccess) {
                // Если операция успешна, показываем сообщение об успехе
                Swal.fire({
                    icon: 'success', // Иконка успеха
                    title: 'Успех!', // Заголовок
                    text: 'Ваш заказ успешно выполнен.', // Текст
                    confirmButtonColor: '#28a745', // Цвет кнопки подтверждения
                    confirmButtonText: 'OK' // Текст кнопки подтверждения
                }).then(function() {
                    // После закрытия SweetAlert2 переходим к контенту #references
                    window.location.href = '#references';
                    // Обновляем страницу
                    location.reload();
                });
            } else {
                // Если операция неуспешна, показываем сообщение об ошибке
                Swal.fire({
                    icon: 'error', // Иконка ошибки
                    title: 'Ошибка!', // Заголовок
                    text: 'Произошла ошибка при выполнении действия.', // Текст
                    confirmButtonColor: '#dc3545', // Цвет кнопки подтверждения
                    confirmButtonText: 'OK' // Текст кнопки подтверждения
                });
            }
        });
    </script>
@endsection
