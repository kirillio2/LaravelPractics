<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestPapersController extends Controller
{
    public function index()
    {
        return view('admin.test-papers.index');
    }
}
