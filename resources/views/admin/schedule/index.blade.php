@extends('layouts.admin_layout')

@section('title', 'Расписание')
@section('content')

    {{-- <style>
        /* Стили для маленького события */
.small-event .fc-title {
    font-size: 12px;
}

/* Стили для большого события */
.large-event .fc-title {
    font-size: 16px;
}
    </style> --}}
    <script>
        // var jsonEventSources =
        //     '[{"events":[{"title":"event1","start":"2024-02-25"},{"title":"event2","start":"2024-02-26","end":"2024-02-27"},{"title":"event3","start":"2024-02-26T12:30:00"}],"color":"black","textColor":"yellow"}]';
        // var eventSources = JSON.parse(jsonEventSources);
        var eventSources = [{
            events: [{

                    title: 'История Казахстана',
                    start: '2024-02-25T12:30:00',
                    end: '2024-02-25T13:00:00'
                },
                {
                    title: 'Автоматизация бухгалтерского учета в 1С: Предприятие',
                    start: '2024-02-27T12:30:00',
                    end: '2024-02-27T13:00:00'
                },
                {
                    title: 'Клиент-серверные технологии',
                    start: '2024-02-26T12:30:00',
                    end: '2024-02-26T13:00:00'
                },
                {
                    title: 'Клиент-серверные технологии',
                    start: '2024-02-26T13:20:00',
                    end: '2024-02-26T14:00:00'


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
                eventSources: eventSources,
               
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
                    timeGrid: {

                    },

                    timeGridWeek: {
                        
                    },

                    day: {

                    }
                },

                eventClick: function(info) {
                    var event = info.event;
                    var title = event.title;
                    var start = event.startStr;
                    var end = event.endStr;

                    var modal = $('#eventModal');
                    modal.find('.modal-body').html('<b>Title:</b> ' + title + '<br><b>Start:</b> ' +
                        start + '<br><b>End:</b> ' + end);
                    modal.modal('show');
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


    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document"> <!-- Добавлен класс modal-dialog-centered -->
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




    <!-- /.content -->

@endsection
