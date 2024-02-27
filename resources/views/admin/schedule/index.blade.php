@extends('layouts.admin_layout')

@section('title', 'Расписание')
@section('content')

    {{-- <style>
    .fc-timeGridWeek-view {
        font-size: 12px;
        line-height: 10px;
        /* padding-top: 4px; */
        /* Размер шрифта */
    }

    .fc-timeGridWeek-view .fc-time-grid {
        font-size: 12px;
        /* Размер шрифта для временной сетки */
    }

    .fc-timeGridWeek-view .fc-day-header {
        font-size: 12px;
        /* Размер шрифта для заголовков дней */
    }

    .custom-event {
        font-size: 12px;
        /* Размер шрифта */
        white-space: normal;
        /* Разрешаем перенос текста */
        overflow: hidden;
        /* Скрытие текста, который выходит за границы */
        text-overflow: ellipsis;
        /* Отображение многоточия, если текст слишком длинный */
        height: auto !important;
        /* Автоматическая высота */
        width: 90% !important;
        /* Ширина 90% от ячейки */
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
                    end: '2024-02-26T14:00:00',

                }
            ],
        }];
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'ru',
                slotDuration: '00:30:00',
                slotMinTime: '08:30:00',
                slotMaxTime: '23:30:00',
                eventDisplay: 'block',
                firstDay: 1,
                // aspectRatio: 2,


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
                    list: 'Список'
                },
                eventContent: function(arg) {
                    return {
                        html: '<div class="custom-event">' + arg.event.title + '</div>',
                        classNames: ['custom-event']
                    };
                },
                // views: {
                //     dayGrid: {
                //         dayMaxEventRows: 1, // Максимальное количество строк событий в ячейке дня
                //         dayMaxEvents: true // Ограничивать количество событий, отображаемых в ячейке дня
                //     },
                //     timeGrid: {



                //     },

                //     timeGridWeek: {
                //         slotLabelInterval: '01:00',


                //     },

                //     day: {
                //         // Параметры, применяемые к представлениям dayGridDay и timeGridDay
                //         // nowIndicator: true // Отображать индикатор текущего времени
                //     }
                // },
                eventSources: eventSources,
                eventClick: function(info) {
                    calendar.changeView('timeGridDay');
                },

            });

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
                    <div id="calendar">

                    </div>

                    <!-- <div id="calendar-buttons">
                                                                <button id="btn-week">Неделя 1</button>
                                                                <button id="btn-week2">Неделя 2</button>
                                                                <button id="btn-week3">Неделя 3</button>
                                                            </div> -->
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- /.content -->

@endsection
