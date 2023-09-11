<?php

namespace App\Http\Controllers\heealthcare;

use App\Http\Controllers\Controller;
use App\Models\Healthcare;
use Illuminate\Http\Request;

class HealthCareController extends Controller
{
    public function index() {
        $healthcareRecords = Healthcare::paginate(10); // Fetch and paginate the records
        return view('healthcare.view', compact('healthcareRecords'));
    }

    public function add() {
        return view('healthcare.add') ;
    }

    public function edit($id)
{
    $healthcareRecord = Healthcare::findOrFail($id);
    return $healthcareRecord ;
    // return view('healthcare.edit', compact('healthcareRecord'));
}

public function delete($id)
{
    $healthcareRecord = Healthcare::findOrFail($id);

    $healthcareRecord->delete();

    return redirect()->route('healthcare.view')->with('success', 'Record deleted successfully');
}


    
}
