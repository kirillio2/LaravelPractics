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

        .card-header {
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
                eventSources: 'http://127.0.0.1:8000/admin_panel/events',

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

    {{-- @foreach ($schedules as $schedule)
        <p>{{ $schedule->id }}</p>
    @endforeach --}}
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
