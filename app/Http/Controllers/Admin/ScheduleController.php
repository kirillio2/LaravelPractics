<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('admin.schedule.index');
    }

    public function events()
    {
        $schedules = Schedule::all();

        $events = [];

        foreach ($schedules as $schedule) {
            $event = [
                'title' => $schedule->nameDiscipline,
                'start' => $schedule->dateStartClass,
                'end' => $schedule->dateFinishClass,
                'data' => [
                    'time' => date('H:i', strtotime($schedule->dateStartClass)),
                    'cabinet' => $schedule->numberCabinet,
                    'nameTeacher' => $schedule->nameTeacher,
                    'phoneTeacher' => $schedule->phoneTeacher,
                    'mailTeacher' => $schedule->mailTeacher,
                    'fileMaterial' => $schedule->fileMaterial,
                    'recordingLecture' => $schedule->recordingLecture,
                ]
            ];

            $events[] = $event;
        }

        return response()->json($events);
    }
}
