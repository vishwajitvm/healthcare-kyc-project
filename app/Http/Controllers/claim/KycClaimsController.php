<?php

namespace App\Http\Controllers\claim;

use App\Http\Controllers\Controller;
use App\Models\DoctorKyc;
use Illuminate\Http\Request;

class KycClaimsController extends Controller
{
    public function index() {
        return view('claim.view') ;
    }

    public function submitClaim(Request $request)
    {
        try {
            // Validate the request data
            $request->validate([
                'kyc_id' => 'required',
            ]);
    
            // Retrieve the valid KYC ID
            $kycId = $request->input('kyc_id');
    
            // Retrieve the DoctorKYC data for the valid KYC ID
            $doctorKycData = DoctorKyc::where('kyc_id', $kycId)->first();
    
            // Check if DoctorKYC data is found
            if (!$doctorKycData) {
                return back()->with('error', 'Invalid KYC ID. Please enter a valid KYC ID.');
            }
    
            // Check if claim_type is not null
            if (is_null($doctorKycData->claim_type)) {
                return back()->with('error', 'Claim type is not specified.');
            }
    
            // Retrieve additional user data, assuming you have a User model
            $user = auth()->user();
    
            return $doctorKycData;
            // Return the data (you can customize this response)
            // return view('claim.result', compact('user', 'doctorKycData'));
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while processing your request.');
        }
    }
    
}
