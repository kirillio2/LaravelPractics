<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcademicPerformanceController extends Controller
{
    public function index()
    {
        return view('admin.academic-performance.index');
    }
}
