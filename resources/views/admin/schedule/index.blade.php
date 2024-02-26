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
                    <div id='calendar'></div>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridWeek',
                locale: 'ru',
                events: [{
                        title: 'event1',
                        start: '2024-02-24'
                    },
                    {
                        title: 'event2',
                        start: '2024-02-25',
                        end: '2024-02-25'
                    },
                    {
                        title: 'event3',
                        start: '2024-02-26T12:30:00',
                        allDay: false // will make the time show
                    }
                ]
            });

            calendar.render();
        });



        

    </script>
    <!-- /.content -->
@endsection
