<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index(){
        $reports = Report::all();

        return view('reports.index',compact('reports'));
    }

    public function create(){
        $service = Service::all();
        return view('reports.create', compact('service'));
    }
}
