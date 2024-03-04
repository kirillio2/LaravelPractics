<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {

        $schedules = Schedule::all();

        return view('admin.schedule.index', [
            'schedules' => $schedules
        ]);
    }

   public function events()
{
    // Получаем данные из модели Schedule
    $schedules = Schedule::all();

    // Инициализируем массив для хранения событий
    $events = [];

    // Проходим по каждой записи в $schedules
    foreach ($schedules as $schedule) {
        // Создаем массив с данными о событии
        $event = [
            'title' => $schedule->nameDiscipline,
            'start' => $schedule->dateStartClass,
            'end' => $schedule->dateFinishClass,
            'data' => [
                'content' => '<div class="card card-primary collapsed-card">' .
                    '<b>Время: ' . $schedule->dateStartClass . '</b>' .
                    '<b>Кабинет: ' . $schedule->numberCabinet . '</b>' .
                    '</div>' .
                    '<b>Преподователь:</b>' .
                    '<div class="card-header">' .
                    '<h4 class="card-title" style="font-size: 0.99rem; color: red;">Альшанова Б.Х.</h4>' .
                    '<div class="card-tools">' .
                    '<a role="button" id="dropdownMenuButton" class="btn btn-tool">' .
                    '<i class="fas fa-plus"></i>' .
                    '</a>' .
                    '</div>' .
                    '</div>' .
                    '<div class="card-body" id="uniqueCardBody">' .
                    'Контакты: +77773286688, Alshanova47@mail.ru' .
                    '</div>' .
                    '</div>' 
            ]
        ];

        // Добавляем событие в массив $events
        $events[] = $event;
    }

    // Возвращаем данные в формате JSON
    return response()->json($events);
}

}
