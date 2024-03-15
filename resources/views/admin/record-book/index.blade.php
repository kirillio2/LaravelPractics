@extends('layouts.admin_layout')

@section('title', 'Расписание')
@section('content')

    <style>
        .table-responsive {
            overflow-x: hidden;
        }

        .rounded-custom {
            border-radius: 20px;
            /* Задайте желаемый радиус закругления */
        }
    </style>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Зачетная книжка</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card rounded-custom">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Оценки в зачетной книжке</h3>
                <div class="d-flex ml-auto"> <!-- Добавлен класс ml-auto -->
                    <label for="semesterFilter" class="mr-2">Семестр: </label>
                    <!-- Перемещен и добавлен класс mr-2 для отступа -->

                    <div class="form-group">

                        <select id="semesterFilter" class="form-control">
                            <option value="">Все</option>
                            <option value="1">1</option>
                            <option value="2" selected>2</option>
                        </select>
                    </div>
                    <div class="form-group ml-3">
                        <input type="text" id="searchInput" class="form-control" placeholder="Поиск...">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Название дисциплины</th>
                                <th>Кредиты</th>
                                <th>Семестр</th>
                                <th>P1</th>
                                <th>P2</th>
                                <th>ТК</th>
                                <th>РД</th>
                                <th>Э</th>
                                <th>И</th>
                                <th>Иц</th>
                                <th>Иб</th>
                                <th>Трад-оценка</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <div class="card rounded-custom">
            <div class="card-header">
                <h3 class="card-title">Описание</h3>
            </div>
            <div class="container-fluid">
                <div class="row mt-4">
                    <nav class="w-100 col">
                        <div class="nav nav-tabs justify-content-center" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                                role="tab" aria-controls="product-desc" aria-selected="true">Примечание</a>
                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                href="#product-comments" role="tab" aria-controls="product-comments"
                                aria-selected="false">Разбалловка</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3 w-100" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                            aria-labelledby="product-desc-tab">
                            <ul class="list-group list-group-flush">
                                {{-- <div class="formula">
                                    \( \frac{{P_{1} + P_{2}}}{2} = P_{ср}; \)
                                    &nbsp;&nbsp;&nbsp;
                                    \( \frac{{P_{ср} + ТК_{ср}}}{2} = РД \)
                                </div> --}}

                                <li class="list-group-item"><b>P<sub>1</sub>P<sub>2</sub></b> - Промежуточный рейтинг –
                                    периодическая проверка учебных достижений обучающихся, проводимая согласно утвержденному
                                    академическому календарю;</li>
                                <li class="list-group-item"><b>ТК</b> - Текущий контроль успеваемости – систематическая
                                    проверка учебных достижений обучающихся по каждой теме или разделу учебной дисциплины,
                                    проводимая преподавателем, ведущим учебные занятия;</li>
                                <li class="list-group-item"><b>РД</b> - Рейтинг допуска - оценка текущего контроля
                                    успеваемости и расчитывается следующим образом:</li>
                                <li class="list-group-item"><b>И</b> - Итоговая оценка по дисциплине включает оценки текущей
                                    успеваемости и итогового контроля (экзаменационной оценки). Доля оценки текущей
                                    успеваемости составляет 60% в итоговой оценке степени освоения обучающимся программы
                                    учебной дисциплины. Оценка итогового контроля составляет 40% итоговой оценки знаний по
                                    данной учебной дисциплине;</li>
                                <li class="list-group-item"><b>И<sub>ц</sub></b> - Цифровой эквивалент итоговой оценки. В
                                    соответствии с таблицей;</li>
                                <li class="list-group-item"><b>И<sub>б</sub></b> - Буквенный эквивалент итоговой оценки. В
                                    соответствии с таблицей;</li>
                                <li class="list-group-item"><b>Трад. оценка</b> - Итоговая оценка по традиционной системе. В
                                    соответствии с таблицей;</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="product-comments" role="tabpanel"
                            aria-labelledby="product-comments-tab">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td align="center">
                                            <p>Оценка по буквенной системе</p>
                                        </td>
                                        <td align="center">
                                            <p>Цифровой эквивалент оценки</p>
                                        </td>
                                        <td align="center">
                                            <p>Процентное содержание (баллы)</p>
                                        </td>
                                        <td align="center">
                                            <p>Оценка по традиционной системе</p>
                                        </td>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>А</p>
                                            </td>
                                            <td>
                                                <p>4,0</p>
                                            </td>
                                            <td>
                                                <p>95-100</p>
                                            </td>
                                            <td rowspan="2">
                                                <p>Отлично</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>А-</p>
                                            </td>
                                            <td>
                                                <p>3,67</p>
                                            </td>
                                            <td>
                                                <p>90-94</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>В+</p>
                                            </td>
                                            <td>
                                                <p>3,33</p>
                                            </td>
                                            <td>
                                                <p>85-89</p>
                                            </td>
                                            <td rowspan="4">
                                                <p>Хорошо</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>В</p>
                                            </td>
                                            <td>
                                                <p>3,0</p>
                                            </td>
                                            <td>
                                                <p>80-84</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>В-</p>
                                            </td>
                                            <td>
                                                <p>2,67</p>
                                            </td>
                                            <td>
                                                <p>75-79</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>С+</p>
                                            </td>
                                            <td>
                                                <p>2,33</p>
                                            </td>
                                            <td>
                                                <p>70-74</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>С</p>
                                            </td>
                                            <td>
                                                <p>2,0</p>
                                            </td>
                                            <td>
                                                <p>65-69</p>
                                            </td>
                                            <td rowspan="4">
                                                <p>Удовлетворительно</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>С-</p>
                                            </td>
                                            <td>
                                                <p>1,67</p>
                                            </td>
                                            <td>
                                                <p>60-64</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>D+</p>
                                            </td>
                                            <td>
                                                <p>1,33</p>
                                            </td>
                                            <td>
                                                <p>55-59</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>D</p>
                                            </td>
                                            <td>
                                                <p>1,0</p>
                                            </td>
                                            <td>
                                                <p>50-54</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>FХ</p>
                                            </td>
                                            <td>
                                                <p>0,5</p>
                                            </td>
                                            <td>
                                                <p>25-49</p>
                                            </td>
                                            <td rowspan="2">
                                                <p>Неудовлетворительно</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>F</p>
                                            </td>
                                            <td>
                                                <p>0</p>
                                            </td>
                                            <td>
                                                <p>0-24</p>
                                            </td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <div class="container">
        <div class="row mt-4">
            <nav class="w-100">
                <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                        role="tab" aria-controls="product-desc" aria-selected="true">Примечание</a>
                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments"
                        role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                    <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating"
                        role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
                </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                    <p>P1, P2 - Промежуточный рейтинг – периодическая проверка учебных достижений обучающихся, проводимая
                        согласно утвержденному академическому календарю;</p>
                    <p>ТК - Текущий контроль успеваемости – систематическая проверка учебных достижений обучающихся по
                        каждой теме или разделу учебной дисциплины, проводимая преподавателем, ведущим учебные занятия;</p>
                    <p>РД - Рейтинг допуска - оценка текущего контроля успеваемости и расчитывается следующим образом:</p>
                    <p>И - Итоговая оценка по дисциплине включает оценки текущей успеваемости и итогового контроля
                        (экзаменационной оценки). Доля оценки текущей успеваемости составляет 60% в итоговой оценке степени
                        освоения обучающимся программы учебной дисциплины. Оценка итогового контроля составляет 40% итоговой
                        оценки знаний по данной учебной дисциплине;</p>
                    <p>Иц - Цифровой эквивалент итоговой оценки. В соответствии с таблицей;</p>
                    <p>Иб - Буквенный эквивалент итоговой оценки. В соответствии с таблицей;</p>
                    <p>Трад. оценка - Итоговая оценка по традиционной системе. В соответствии с таблицей;</p>
                </div>
                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td align="center">
                                    <p>Оценка по буквенной системе</p>
                                </td>
                                <td align="center">
                                    <p>Цифровой эквивалент оценки</p>
                                </td>
                                <td align="center">
                                    <p>Процентное содержание (баллы)</p>
                                </td>
                                <td align="center">
                                    <p>Оценка по традиционной системе</p>
                                </td>
                            </tr>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>А</p>
                                    </td>
                                    <td>
                                        <p>4,0</p>
                                    </td>
                                    <td>
                                        <p>95-100</p>
                                    </td>
                                    <td rowspan="2">
                                        <p>Отлично</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>А-</p>
                                    </td>
                                    <td>
                                        <p>3,67</p>
                                    </td>
                                    <td>
                                        <p>90-94</p>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>В+</p>
                                    </td>
                                    <td>
                                        <p>3,33</p>
                                    </td>
                                    <td>
                                        <p>85-89</p>
                                    </td>
                                    <td rowspan="4">
                                        <p>Хорошо</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>В</p>
                                    </td>
                                    <td>
                                        <p>3,0</p>
                                    </td>
                                    <td>
                                        <p>80-84</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>В-</p>
                                    </td>
                                    <td>
                                        <p>2,67</p>
                                    </td>
                                    <td>
                                        <p>75-79</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>С+</p>
                                    </td>
                                    <td>
                                        <p>2,33</p>
                                    </td>
                                    <td>
                                        <p>70-74</p>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>С</p>
                                    </td>
                                    <td>
                                        <p>2,0</p>
                                    </td>
                                    <td>
                                        <p>65-69</p>
                                    </td>
                                    <td rowspan="4">
                                        <p>Удовлетворительно</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>С-</p>
                                    </td>
                                    <td>
                                        <p>1,67</p>
                                    </td>
                                    <td>
                                        <p>60-64</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>D+</p>
                                    </td>
                                    <td>
                                        <p>1,33</p>
                                    </td>
                                    <td>
                                        <p>55-59</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>D</p>
                                    </td>
                                    <td>
                                        <p>1,0</p>
                                    </td>
                                    <td>
                                        <p>50-54</p>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>FХ</p>
                                    </td>
                                    <td>
                                        <p>0,5</p>
                                    </td>
                                    <td>
                                        <p>25-49</p>
                                    </td>
                                    <td rowspan="2">
                                        <p>Неудовлетворительно</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>F</p>
                                    </td>
                                    <td>
                                        <p>0</p>
                                    </td>
                                    <td>
                                        <p>0-24</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut
                    ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo
                    augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis.
                    Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et
                    erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia
                    lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at,
                    consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut
                    varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor
                    vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula
                    placerat. </div>
            </div>
        </div>
    </div> --}}

    <script>
        $(document).ready(function() {
            var testData = [{
                    "name": "Автоматизация бухгалтерского учета в 1С: Предприятие",
                    "count_credits": 8,
                    "semester": "1",
                    "p1": "75",
                    "p2": "90",
                    "tk": "60",
                    "rd": "60",
                    "ex": "17",
                    "i": "67",
                    "ie": "2,67",
                    "ib": "B-",
                    "trating": "Хорошо"
                },
                {
                    "name": "Клиент-серверные технологии",
                    "count_credits": 8,
                    "semester": "2",
                    "p1": "60",
                    "p2": "75",
                    "tk": "80",
                    "rd": "80",
                    "ex": "45",
                    "i": "90",
                    "ie": "3,67",
                    "ib": "A-",
                    "trating": "Отлично"
                },
                {
                    "name": "Java - технологии",
                    "count_credits": 8,
                    "semester": "1",
                    "p1": "90",
                    "p2": "80",
                    "tk": "50",
                    "rd": "68",
                    "ex": "89",
                    "i": "88",
                    "ie": "5,2",
                    "ib": "A",
                    "trating": "Отлично"
                }
            ];
            var table = $('#example').DataTable({
                data: testData,
                columns: [{
                        data: 'name'
                    },
                    {
                        data: 'count_credits'
                    },
                    {
                        data: 'semester'
                    },
                    {
                        data: 'p1'
                    },
                    {
                        data: 'p2'
                    },
                    {
                        data: 'tk'
                    },
                    {
                        data: 'rd'
                    },
                    {
                        data: 'ex'
                    },
                    {
                        data: 'i'
                    },
                    {
                        data: 'ie'
                    },
                    {
                        data: 'ib'
                    },
                    {
                        data: 'trating'
                    }
                ],
                dom: '<"row"<"col-sm-12"t>>',
                paging: false,
                responsive: true,
            });

            // Применение фильтрации при изменении значения выпадающего списка
            $('#semesterFilter').on('change', function() {
                table.columns(2).search(this.value).draw();
            }).change(); // Вызываем событие change для применения фильтра по умолчанию

            // Применение поиска при вводе в поле ввода
            $('#searchInput').on('keyup', function() {
                table.search(this.value).draw();
            });
        });
    </script>

@endsection
