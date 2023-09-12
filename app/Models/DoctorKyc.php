<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DoctorKyc extends Model
{
    use HasFactory;
    protected $table = 'doctor_kyc'; 

public static function submit($data)
    {
        return DB::transaction(function () use ($data) {
            $doctorKYC = new static();
            
            $doctorKYC->doctor_name = $data['doctor_name'];
            $doctorKYC->state = $data['state'];
            $doctorKYC->city = $data['city'];
            $doctorKYC->locality = $data['locality'];
            $doctorKYC->phone = $data['phone'];
            $doctorKYC->practice_in = $data['practice_in'];
            $doctorKYC->status = $data['status'];

            // Upload visiting card and letter head and store file paths in the database
            if (isset($data['upload_visiting_card'])) {
                $visitingCardPath = $data['upload_visiting_card']->store('visiting_cards', 'public');
                $doctorKYC->upload_visiting_card = $visitingCardPath;
            }
            if (isset($data['upload_letter_head'])) {
                $letterHeadPath = $data['upload_letter_head']->store('letter_heads', 'public');
                $doctorKYC->upload_letter_head = $letterHeadPath;
            }

            $doctorKYC->save();

            $kycId = $doctorKYC->kyc_id;

            return $kycId;
        });
    }
}
