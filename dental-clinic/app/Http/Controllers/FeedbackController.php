<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackStoreRequest;
use App\Models\Patient;

class FeedbackController extends Controller
{
    public function store(FeedbackStoreRequest $request) {
        $patient = new Patient();

        $patient->name = $request->name;
        $patient->surname = $request->surname;
        $patient->lastname = $request->lastname;
        $patient->phone = $request->phone;

        $patient->save();

        return response()->json(['success'=>'Заявка <span>успешно</span> отправлена! Ожидайте звонка.']);
    }

    public function reload() {
        return response()->json(['captcha' => captcha_img()]);
    }

}
