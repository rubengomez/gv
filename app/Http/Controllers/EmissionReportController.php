<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmissionReportController extends Controller
{
    public function mensual(Request $request)
    {
        return view('reports.emissions');
    }
}
