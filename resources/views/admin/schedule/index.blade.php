@extends('layouts.admin_layout')

@section('title', 'Расписание')
@section('content')



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
                    <div id="calendar-buttons">
                        <button id="btn-week">Неделя 1</button>
                        <button id="btn-week2">Неделя 2</button>
                        <button id="btn-week3">Неделя 3</button>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <style>

    </style>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
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

            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'ru',
                initialView: 'timeGridWeek',


                eventSources: eventSources,
                eventClick: function(info) {
                    // Изменяем вид календаря на 'timeGridDay' при нажатии на событие
                    calendar.changeView('timeGridDay');
                }
            });

            calendar.render();
            // Обработчики событий для кнопок
            document.getElementById('btn-week').addEventListener('click', function() {
                calendar.changeView('timeGridDay');
            });

            document.getElementById('btn-week2').addEventListener('click', function() {
                calendar.changeView('dayGridMonth');
            });

            document.getElementById('btn-week3').addEventListener('click', function() {
                calendar.changeView('timeGridWeek');
            });
        });
    </script>
    <!-- /.content -->
@endsection
