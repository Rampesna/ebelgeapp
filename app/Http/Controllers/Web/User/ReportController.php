<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index()
    {
        return view('user.modules.report.index.index');
    }
}
