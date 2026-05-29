<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class AdminController extends Controller
{
    public function index()
    {
        $totalPatients = Patient::count();

        $malePatients = Patient::where('gender', 'L')->count();

        $femalePatients = Patient::where('gender', 'P')->count();

        return view('admin.dashboard', [
            'totalPatients' => $totalPatients,
            'malePatients' => $malePatients,
            'femalePatients' => $femalePatients,
        ]);
    }
}