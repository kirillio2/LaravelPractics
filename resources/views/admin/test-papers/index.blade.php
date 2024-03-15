@extends('layouts.admin_layout')

@section('title', 'Расписание')
@section('content')

    <div class="container">
        <h2>Контрольные работы</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-widget widget-user-2">
                    <div class="widget-user-header bg-warning">
                        <h5>Автоматизация бухгалтерского учета в 1С: Предприятие</h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-warning">
                                    Контрольная работа 1 <span class="float-right badge bg-primary">31</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-warning">
                                    Контрольная работа 2 <span class="float-right badge bg-info">5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-widget widget-user-2">
                    <div class="widget-user-header bg-warning">
                        <h5>Клиент-серверные технологии</h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-warning">
                                    Контрольная работа 1 <span class="float-right badge bg-primary">31</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-warning">
                                    Контрольная работа 2 <span class="float-right badge bg-info">5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-widget widget-user-2">
                    <div class="widget-user-header bg-warning">
                        <h5>Java - технологии</h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-warning">
                                    Контрольная работа 1 <span class="float-right badge bg-primary">31</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-warning">
                                    Контрольная работа 2 <span class="float-right badge bg-info">5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-widget widget-user-2">
                    <div class="widget-user-header bg-warning">
                        <h5>Облачные вычисления и технологии</h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-warning">
                                    Контрольная работа 1 <span class="float-right badge bg-primary">31</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-warning">
                                    Контрольная работа 2 <span class="float-right badge bg-info">5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-widget widget-user-2">
                    <div class="widget-user-header bg-warning">
                        <h5>Автоматизация бухгалтерского учета в 1С: Предприятие</h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-warning">
                                    Контрольная работа 1 <span class="float-right badge bg-primary">31</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-warning">
                                    Контрольная работа 2 <span class="float-right badge bg-info">5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-widget widget-user-2">
                    <div class="widget-user-header bg-warning">
                        <h5>Технологическое Предпринимательство и Стартапы</h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-warning">
                                    Контрольная работа 1 <span class="float-right badge bg-primary">31</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-warning">
                                    Контрольная работа 2 <span class="float-right badge bg-info">5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="modal-warning" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Контрольная работа 1|2</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="timeline">

                        <div class="time-label">
                            <span class="bg-red">10 Янв. 2024</span>
                        </div>



                        <div>
                            <i class="fas fa-envelope bg-blue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                                <h3 class="timeline-header"><a href="#">Задание</a></h3>
                                <div class="timeline-body">
                                    Нужно придумать сайт который выполняет условия: Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Beatae, molestiae dicta! Quibusdam hic debitis fugiat repellat
                                    perspiciatis magni at provident sapiente, enim molestias maxime quaerat porro vero
                                    velit. Illo, quo!

                                    <div class="container mt-5">
                                        <p>Нажмите на ссылку ниже, чтобы скачать файл с домашним заданием:</p>
                                        <a href="путь_к_вашему_файлу" class="btn btn-primary"><i
                                                class="fas fa-download mr-2"></i> Скачать файл</a>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div class="time-label">
                            <span class="bg-green">3 Фев. 2024</span>
                        </div>

                        <div>
                            <i class="fa fa-file bg-purple"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-clock"></i> 2 дня назад</span>
                                <h3 class="timeline-header"><a href="#">Файл размещен</a></h3>
                                <div class="timeline-body">
                                    <p>Ожидайте проверки</p>
                                </div>
                            </div>
                        </div>

                        <div class="time-label">
                            <span class="bg-yellow">6 Фев. 2024</span>
                        </div>

                        <div>
                            <i class="fas fa-comments bg-green"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                                <h3 class="timeline-header"><a href="#">Jay White</a> сделал комментарий</h3>
                                <div class="timeline-body">
                                    Ты не правильно сделал ! Нужно так: Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Dolor aut mollitia modi, explicabo voluptate quod, inventore animi a quaerat
                                    voluptas rerum! Commodi veniam illo autem rem. Unde accusantium soluta ipsa!
                                </div>
                            </div>
                        </div>


                        <div class="time-label">
                            <span class="bg-green">18 Фев. 2024</span>
                        </div>

                        <div>
                            <i class="fa fa-file bg-purple"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-clock"></i> 2 дня назад</span>
                                <h3 class="timeline-header"><a href="#">Файл размещен</a></h3>
                                <div class="timeline-body">
                                    <p>Ожидайте проверки</p>
                                </div>
                            </div>
                        </div>

                        <div class="time-label">
                            <span class="bg-green">25 Фев. 2024</span>
                        </div>

                        <div>
                            <i class="fa fa-file fa-thumbs-up bg-purple"></i>
                            {{-- <i class="fa-solid "></i> --}}
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-clock"></i> 2 дня назад</span>
                                <h3 class="timeline-header"><a href="#">Задание принято</a></h3>
                                <div class="timeline-body">
                                    <p>Оценка: 80</p>
                                </div>
                            </div>
                        </div>


                        <div>
                            <i class="fas fa-clock bg-gray"></i>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Загрузка файла</label>
                        </div>
                    </div>


                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-outline-dark">Отправить</button>
                </div>
            </div>
        </div>
    </div>

@endsection
