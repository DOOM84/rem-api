<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\SendContact;
use Illuminate\Support\Facades\Mail;

class SendController extends Controller
{
    public function contact(ContactRequest $request)
    {
        try {
            Mail::send(new SendContact());
        } catch (\Exception $e) {
            return response()->json([
                'errors' => [
                    'failed' => ['Ошибка. Попытайтесь позже.']
                ]
            ], 500);
        }
        return response()->json(['success' =>'Ваше сообщение успешно отправлено']);
    }
}
