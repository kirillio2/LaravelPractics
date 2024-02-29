@extends('layouts.admin_layout')

@section('title', 'Расписание')
@section('content')

    <style>
        .card-title {
            font-size: 0.99rem;
        }

        .card-primary {
            width: 200px;
        }
        .card-header{
            padding: 0.1rem 1.25rem;
        }

    </style>
    <script>
        $('body').delegate("#dropdownMenuButton", "click", function() {
            var dropdownMenu = $(this).next('.card-body');
            var collapsedCard = $(this).closest('.card');
            collapsedCard.toggleClass('collapsed-card');

            var icon = $(this).find('i');
            icon.toggleClass('fa-minus fa-plus');

        });

        $(document).ready(function() {
            function addTooltipId() {
                var tooltipId = 'tooltip949932'; // ID элемента тултипа, который будет показан
                $(this).attr('aria-describedby', tooltipId);
            }

            // Функция, которая будет вызываться при уходе курсора с элемента
            function removeTooltipId() {
                $(this).removeAttr('aria-describedby'); // Удаляем атрибут aria-describedby
            }

            // Устанавливаем обработчики событий на элементы с классом .btn-secondary
            $('body').on("mouseenter", "a.btn-secondary", addTooltipId);
            $('body').on("mouseleave", "a.btn-secondary", removeTooltipId);
        });

        // var jsonEventSources =
        //     '[{"events":[{"title":"event1","start":"2024-02-25"},{"title":"event2","start":"2024-02-26","end":"2024-02-27"},{"title":"event3","start":"2024-02-26T12:30:00"}],"color":"black","textColor":"yellow"}]';
        // var eventSources = JSON.parse(jsonEventSources);
        var eventSources = [{
            events: [{

                    title: 'История Казахстана',
                    start: '2024-02-25T12:30:00',
                    end: '2024-02-25T13:00:00',
                    data: {
                        title: "Заголовок события 1",
                        content: '<div class="card card-primary collapsed-card">' +
                            '<b>Время: 12:30</b>' +
                            '<b>Кабинет: 112A</b>' +
                            '<b>Преподователь:</b>' +
                            '<div class="card-header">' +
                            '<h4 class="card-title" style="font-size: 0.99rem;">Альшанова Б.Х.</h4>' +
                            '<div class="card-tools">' +
                            '<a role="button" id="dropdownMenuButton" class="btn btn-tool" data-card-widget="collapse">' +
                            '<i class="fas fa-plus"></i>' +
                            '</a>' +
                            '</div>' +
                            '</div>' +
                            '<div class="card-body" style="display: none;">' +
                            'Контакты: +77773286688, Alshanova47@mail.ru' +
                            '</div>' +
                            '</div>' +

                            '<div class="card card-primary collapsed-card">' +
                            '<b>Материалы:</b>' +
                            '<div class="card-header">' +
                            '<h4 class="card-title" style="font-size: 0.99rem;">Материалы ДОТ:</h4>' +
                            '<div class="card-tools">' +
                            '<a role="button" id="dropdownMenuButton" class="btn btn-tool" data-card-widget="collapse">' +
                            '<i class="fas fa-plus"></i>' +
                            '</a>' +
                            '</div>' +
                            '</div>' +
                            '<div class="card-body" style="display: none;">' +
                            '<a href="aa">PDF</a> Справочник путеводить 2023.pdf <br><br> <a href="aa">Запись</a> Острянина Т.К 19.02 10.30' +
                            '</div>' +
                            '</div>'
                    }
                },
                {
                    title: 'Автоматизация бухгалтерского учета в 1С: Предприятие',
                    start: '2024-02-27T12:30:00',
                    end: '2024-02-27T13:00:00',
                    data: {
                        title: "Заголовок события 2",
                        content: "<b>Преподователь:</b> Альшанова Б.Х. </br> Контакты: +77773286688, </br>Alshanova47@mail.ru </br> <b>Материалы ДОТ:</b> <a>PDF</a> "
                    }
                },
                {
                    title: 'Клиент-серверные технологии',
                    start: '2024-02-26T12:30:00',
                    end: '2024-02-26T13:00:00',
                    data: {
                        title: "Заголовок события 3",
                        content: "Подробная информация о событии 3цукап купук пук пукпу пуп упу у пп"
                    }
                },
                {
                    title: 'Клиент-серверные технологии',
                    start: '2024-02-28T13:20:00',
                    end: '2024-02-28T14:00:00',
                    data: {
                        title: "Заголовок события 4",
                        content: '<a role="button" class="btn btn-secondary" ' +
                            'data-bs-toggle="tooltip" data-bs-placement="top" ' +
                            'data-bs-custom-class="custom-tooltip" ' +
                            'data-bs-title="This top tooltip is themed via CSS variables.">' +
                            'Преподователь' +
                            '</a>'
                    }
                }
            ],
        }];
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'ru',
                initialView: 'timeGridDay',
                slotDuration: '00:30:00',
                slotMinTime: '08:30:00',
                slotMaxTime: '23:30:00',
                eventDisplay: 'block',
                firstDay: 1,
                nowIndicator: true,
                navLinks: true,
                eventSources: eventSources,

                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },

                buttonText: {
                    today: 'Сегодня',
                    month: 'Месяц',
                    week: 'Неделя',
                    day: 'День',
                    list: 'Список',
                },

                eventContent: function(arg) {
                    return {
                        html: '<div class="custom-event">' + arg.event.title + '</div>',
                        classNames: ['custom-event']
                    };
                },

                views: {
                    dayGrid: {
                        dayMaxEventRows: 1
                    },
                },

                eventClick: function(info) {
                    var event = info.event;
                    var title = event.title;
                    var start = event.startStr;
                    var end = event.endStr;

                    // Обращение к данным из объекта data
                    var dataTitle = event.extendedProps.data.title;
                    var dataContent = event.extendedProps.data.content;

                    // Удалить предыдущий popover, если он есть
                    $('.popover').remove();

                    $(info.el).popover({
                        title: title,
                        placement: 'top',
                        trigger: 'manual',
                        content: dataContent,
                        container: 'body',
                        html: true,
                        template: '<div class="popover" role="tooltip"><div class="arrow"></div><span class="btn btn-link float-right pop-close">x</span><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
                    });

                    // Показать popover
                    $(info.el).popover('show');

                    $('.pop-close').click(function() {
                        $(info.el).popover('hide');
                    });
                },
                eventMouseEnter: function(info) {
                    info.el.style.cursor = 'pointer';

                    // Выделение события при наведении (другой цвет фона и текста)
                    info.el.style.backgroundColor = '#dc3545'; // другой цвет фона
                    info.el.style.borderColor = '#dc3545';
                    info.el.style.color = '#333'; // другой цвет текста

                    // Показ дополнительной информации
                    var tooltip = document.createElement('div');
                    tooltip.classList.add('tooltip');
                    tooltip.textContent = info.event.title;
                    document.body.appendChild(tooltip);
                },
                eventMouseLeave: function(info) {
                    // Возвращение стандартного курсора и стиля при выходе из события
                    info.el.style.cursor = '';
                    info.el.style.backgroundColor = '';
                    info.el.style.borderColor = '';

                    // Удаление всплывающей подсказки
                    var tooltip = document.querySelector('.tooltip');
                    if (tooltip) {
                        tooltip.remove();
                    }
                }
            });

            // Функция для установки высоты календаря
            function setCalendarHeight() {
                var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body
                    .clientHeight;
                calendarEl.style.height = windowHeight + 'px';
            }

            // Вызываем функцию установки высоты календаря при загрузке страницы и при изменении размеров окна
            setCalendarHeight();
            window.addEventListener('resize', setCalendarHeight);

            // Устанавливаем пользовательское отображение событий
            calendar.setOption('eventContent', function(arg) {
                var currentView = calendar.view.type;
                if (currentView === 'timeGridWeek') {
                    return formatEventContent(arg);
                } else {
                    return arg.event.title;
                }
            });

            // Вспомогательная функция для форматирования содержимого события для режима timeGridWeek
            function formatEventContent(arg) {
                var title = arg.event.title;
                if (title.length > 20) {
                    title = title.substring(0, 20) + '...';
                }
                return {
                    html: '</div><div style="font-size: 10px">' + title + '</div>'
                };
            }
            calendar.render();

        });
    </script>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Расписание</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body p-0">
                    <div id="calendar"></div>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <!-- Добавлен класс modal-dialog-centered -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Дисциплина</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="eventInfo">
                    <!-- Здесь будет отображаться информация о событии -->
                </div>
            </div>
        </div>
    </div>

@endsection
