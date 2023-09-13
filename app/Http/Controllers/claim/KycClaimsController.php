<?php

namespace App\Http\Controllers\claim;

use App\Http\Controllers\Controller;
use App\Models\DoctorKyc;
use App\Models\Maac;
use Illuminate\Http\Request;

class KycClaimsController extends Controller
{
    public function index() {
        return view('claim.view') ;
    }

    public function incentiveView(Request $request)
    {
        // Handle the Incentive view logic here
        return view('claim.incentive.incentiveview');
    }
    
    public function maacView(Request $request)
    {
        // Handle the MAAC view logic here
        return view('claim.maac.maacview');
    }
    
    public function abcView(Request $request)
    {
        // Handle the Ayurved Bhandar Claim view logic here
        return view('claim.abc.abcview');
    }
    

    public function submitClaim(Request $request)
    {
        try {
            if ($request->has('kyc_id')) {
                $kycId = $request->input('kyc_id');
                $doctorKycData = DoctorKyc::where('kyc_id', $kycId)->first();
    
                if (!$doctorKycData) {
                    return back()->with('error', 'Invalid KYC ID. Please enter a valid KYC ID.');
                }
    
                if (is_null($doctorKycData->claim_type)) {
                    return back()->with('error', 'Claim type is not specified.');
                }
    
                $user = auth()->user();
                $claimType = $doctorKycData->claim_type;
    
                // Redirect based on the claim type
                switch ($claimType) {
                    case 'Incentive':
                        return redirect()->route('claim.incentive.view', compact('user', 'kycId'));
                    case 'MAAC':
                        return redirect()->route('claim.maac.view', compact('user', 'kycId'));
                    case 'Ayurved Bhandar Claim':
                        return redirect()->route('claim.abc.view', compact('user', 'kycId'));
                    default:
                        return back()->with('error', 'Invalid claim type.');
                }
            } else {
                return view('claim.view');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while processing your request.');
        }
    }
    
    


    //MAAC STORE
    public function maacStore(Request $request)
    {
        $request->validate([
            'kyc_id' => 'required',
            'distributor_name' => 'required|string',
            'region' => 'required|string',
            'drs_name' => 'required|string',
            'drs_mobile' => 'required|string',
            'bill_number' => 'required|string',
            'bill_date' => 'required|date',
            'bill_amount' => 'required|string',
            'payment_received_date' => 'required|date',
            'goods_dispatch_date' => 'required|date',
            'manager_name' => 'required|string',
        ]);
    
        try {
            // Create a new Maac model instance
            $maac = new Maac;
            $maac->kyc_id = $request->input('kyc_id');
            $maac->distributor_name = $request->input('distributor_name');
            $maac->region = $request->input('region');
            $maac->drs_name = $request->input('drs_name');
            $maac->drs_mobile = $request->input('drs_mobile');
            $maac->bill_number = $request->input('bill_number');
            $maac->bill_date = $request->input('bill_date');
            $maac->bill_amount = $request->input('bill_amount');
            $maac->payment_received_date = $request->input('payment_received_date');
            $maac->goods_dispatch_date = $request->input('goods_dispatch_date');
            $maac->manager_name = $request->input('manager_name');
    
            // Save the Maac model to the database
            $maac->save();
    
            return redirect()->route('claim.view')->with('success', 'MAAC form submitted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while processing your request.');
        }
    }
    
    
    
}
