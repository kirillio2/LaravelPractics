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

        .card-body {
            padding: 0.2rem 1.25rem;
        }


        
    </style>
    <script>
        $('body').delegate("#dropdownMenuButton1", "click", function() {
            var dropdownMenu = $(this).next('.card-body');
            var collapsedCard = $(this).closest('.card');
            collapsedCard.toggleClass('collapsed-card');

            var icon = $(this).find('i');
            icon.toggleClass('fa-minus fa-plus');

            // Скрываем показываем body
            var displayValue = $('#uniqueCardBody1').css('display');

            if (displayValue === 'block') {
                $('#uniqueCardBody1').css('display', 'none');
            } else {
                $('#uniqueCardBody1').css('display', 'block');
            }

        });

        $('body').delegate("#dropdownMenuButton2", "click", function() {
            var dropdownMenu = $(this).next('.card-body');
            var collapsedCard = $(this).closest('.card');
            collapsedCard.toggleClass('collapsed-card');

            var icon = $(this).find('i');
            icon.toggleClass('fa-minus fa-plus');

            // Скрываем показываем body
            var displayValue = $('#uniqueCardBody2').css('display');

            if (displayValue === 'block') {
                $('#uniqueCardBody2').css('display', 'none');
            } else {
                $('#uniqueCardBody2').css('display', 'block');
            }
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
                height: 800,

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
                        html: '<div class="custom-event">' + arg.event.title + '<span class="float-right badge bg-danger">842</span> ап</div>',
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
                    var dataTitle = event.extendedProps.data.title;
                    var dataContent = event.extendedProps.data.content;

                    $('.popover').remove();

                    var popoverBody = '<b>Время: </b>' + event.extendedProps.data.time + '</br>' +
                                    '<b>Кабинет: </b>' + event.extendedProps.data.cabinet  + '</br>' +
                                    '<b>Преподователь:</b>' +
                                    '<div class="card-header">' +
                                    '<h4 class="card-title" style="font-size: 0.99rem; color: red;">' + event.extendedProps.data.nameTeacher  + '</h4>' +
                                    '<div class="card-tools">' +
                                    '<a role="button" id="dropdownMenuButton1" class="btn btn-tool">' +
                                    '<i class="fas fa-plus"></i>' +
                                    '</a>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="card-body" id="uniqueCardBody1">' +
                                    'Контакты: '+ event.extendedProps.data.phoneTeacher + ', </br>' + 
                                    'Почта: ' + event.extendedProps.data.mailTeacher + '</br>' +
                                    '</div>' +
                                    '</div>' +

                                    '<b>Материалы:</b>' +
                                    '<div class="card-header">' +
                                    '<h4 class="card-title" style="font-size: 0.99rem; color: red;">ДОТ</h4>' +
                                    '<div class="card-tools">' +
                                    '<a role="button" id="dropdownMenuButton2" class="btn btn-tool">' +
                                    '<i class="fas fa-plus"></i>' +
                                    '</a>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="card-body" id="uniqueCardBody2">' +
                                    '<a href="'+ event.extendedProps.data.fileMaterial + '">PDF </a>Справочник путеводить 2023+pdf</br>' + 
                                    '<a href="'+ event.extendedProps.data.ecordingLecture + '">Запись </a>Острянина Т.К 19.02 10.30</br>' + 
                                    '</div>' +
                                    '</div>' ;

                    $(document).ready(function() {
                        $('#uniqueCardBody1').css('display', 'none');
                        $('#uniqueCardBody2').css('display', 'none');
                    });

                    $(info.el).popover({
                        title: title,
                        placement: 'left',
                        trigger: 'manual',
                        content: popoverBody,
                        container: 'body',
                        html: true,
                        template: '<div class="popover" role="tooltip"><div class="arrow"></div><span class="btn btn-link float-right pop-close">X</span><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
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
                }, 
                

            });

            // Функция для установки высоты календаря
            // function setCalendarHeight() {
            //     var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body
            //         .clientHeight;
            //     calendarEl.style.height = windowHeight + 'px';
            // }

            // // Вызываем функцию установки высоты календаря при загрузке страницы и при изменении размеров окна
            // setCalendarHeight();
            // window.addEventListener('resize', setCalendarHeight);

            // Устанавливаем пользовательское отображение событий
            calendar.setOption('eventContent', function(arg) {
                var currentView = calendar.view.type;
                if (currentView === 'timeGridWeek') {
                    return formatEventContentTimeGridWeek(arg);
                } else {
                    return formatEventContent(arg);
                }
            });

            // Вспомогательная функция для форматирования содержимого события для режима timeGridWeek
            function formatEventContentTimeGridWeek(arg) {
                var title = arg.event.title;
                if (title.length > 20) {
                    title = title.substring(0, 20) + '...';
                }
                return {
                    html: '</div><div style="font-size: 10px">' + title + '<span class="float-right badge bg-success">NEW</span></div>'
                };
            }

            // Вспомогательная функция для форматирования содержимого события для всех кроме timeGridWeek
            function formatEventContent(arg) {
                var title = arg.event.title;
                return {
                    html: title + '<span class="float-right badge bg-success">NEW</span></div>'
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

@endsection
