<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

class ReportController extends Controller
{
    public function index(){
        $reports = Report::where('user_id', Auth::user()->id)->get();

        return view('reports.index',compact('reports'));
    }

    public function create(){
        $service = Service::all();
        return view('reports.create', compact('service'));
    }

    public function store(Request $request){
        $request -> validate([
            'address' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'time' => ['required', 'date_format:H:i'],
            'payment' => ['required', 'string', 'max:255'],
            'service_id' => ['required']  
        ]);

        Report::create([
            'address' => $request->address,
            'time' => $request->time,
            'date' => $request -> date,
            'payment' => $request -> payment,
            'service_id' => $request ->service_id
        ]);
    }


}
