<?php

namespace App\Http\Controllers\heealthcare;

use App\Http\Controllers\Controller;
use App\Models\Healthcare;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class HealthCareController extends Controller
{
    public function index() {
        $healthcareRecords = User::paginate(10); // Fetch and paginate the records
        return view('healthcare.view', compact('healthcareRecords'));
    }

    public function add() {
        return view('healthcare.add') ;
    }

    public function edit($id)
{
    $healthcareRecord = User::findOrFail($id);
    return $healthcareRecord ;
    // return view('healthcare.edit', compact('healthcareRecord'));
}

public function delete($id)
{
    $healthcareRecord = User::findOrFail($id);

    $healthcareRecord->delete();

    return redirect()->route('healthcare.view')->with('success', 'Record deleted successfully');
}

public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'mr_name' => 'required|string|max:255',
            'asm_name' => 'required|string|max:255',
            'rsm_name' => 'required|string|max:255',
            'hq_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users', // Make sure the email is unique
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Hash the password before storing it in the database
        $passwordHash = Hash::make($request->input('password'));

        // Create a new user record
        $user = new User();
        $user->name = $request->input('mr_name');
        $user->mr_name = $request->input('mr_name');
        $user->mr_name = $request->input('mr_name');
        $user->asm_name = $request->input('asm_name');
        $user->rsm_name = $request->input('rsm_name');
        $user->hq_name = $request->input('hq_name');
        $user->email = $request->input('email');
        $user->password = $passwordHash;

        // Save the user record to the database
        $user->save();

        // Redirect to a success page or perform other actions as needed
        return redirect()->route('healthcare.add')->with('message', 'User record added successfully');
    }
    
}
