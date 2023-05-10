<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackStoreRequest;
use App\Models\FormPatient;
use App\Models\Patient;
use Carbon\Carbon;

class FeedbackController extends Controller
{
    public function store(FeedbackStoreRequest $request) {

        $patient = Patient::updateOrCreate(
            ['name'=>$request->name, 'surname'=>$request->surname, 'lastname'=>$request->lastname],
            ['phone'=>$request->phone, 'updated_at'=>Carbon::now()]
        );

        if($request->doctorId) {
            $form_patient = new FormPatient();
            $form_patient->patient_id = $patient->id;
            $form_patient->doctor_id = $request->doctorId;
            $form_patient->save();
        }

        return response()->json(['success'=>'Заявка <span>успешно</span> отправлена! Ожидайте звонка.']);
    }

    public function reload() {
        return response()->json(['captcha' => captcha_img()]);
    }

}
