<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fisicoReportController extends Controller
{
    public function mensual(Request $request)
    {
        return view('reports.fisico');
    }
}
