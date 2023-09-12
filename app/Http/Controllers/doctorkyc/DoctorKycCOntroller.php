<?php

namespace App\Http\Controllers\doctorkyc;

use App\Http\Controllers\Controller;
use App\Models\DoctorKyc;
use Illuminate\Http\Request;

class DoctorKycCOntroller extends Controller
{
    public function index() {
        $doctorKycRecords  = DoctorKyc::latest()->paginate(10) ;
        return view('doctorkyc.view' , compact('doctorKycRecords'));
    }

    public function add() {
        return view('doctorkyc.add') ;
    }

    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'doctor_name' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'locality' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'practice_in' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);
    
        // Create an array with the validated data
        $data = [
            'doctor_name' => $request->input('doctor_name'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'locality' => $request->input('locality'),
            'phone' => $request->input('phone'),
            'practice_in' => $request->input('practice_in'),
            'status' => $request->input('status'),
            'claim_type' => $request->input('claim_type'),            
        ];
    
        // Include the uploaded files in the data array
        if ($request->hasFile('upload_visiting_card')) {
            $data['upload_visiting_card'] = $request->file('upload_visiting_card');
        }
        if ($request->hasFile('upload_letter_head')) {
            $data['upload_letter_head'] = $request->file('upload_letter_head');
        }
    
        // Call the submit method to store the data and retrieve kyc_id
        $kycId = DoctorKYC::submit($data);
    
        // Redirect back with a success message and the generated kyc_id
        return redirect()
            ->route('doctorkyc.view')
            ->with('success', 'Doctor KYC record added successfully. KYC ID: ' . $kycId);
    }

    public function delete($id)
    {
        $doctorKYC = DoctorKYC::find($id);
        
        if (!$doctorKYC) {
            return redirect()->route('doctorkyc.view')->with('error', 'Doctor KYC record not found');
        }
    
        $doctorKYC->delete();
    
        return redirect()->route('doctorkyc.view')->with('success', 'Doctor KYC record deleted successfully');
    }

    public function edit(Request $request, $id)
    {
        // Validation rules here
        
        $doctorKYC = DoctorKYC::find($id);
        
        if (!$doctorKYC) {
            return redirect()->route('doctorkyc.view')->with('error', 'Doctor KYC record not found');
        }
        return $doctorKYC ;
    
        // return redirect()->route('doctorkyc.view')->with('success', 'Doctor KYC record updated successfully');
    }
    
    
}
