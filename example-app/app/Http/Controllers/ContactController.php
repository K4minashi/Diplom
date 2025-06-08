<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact_Form;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submit(ContactFormRequest $request)
    {
        $message = Contact_Form::create($request->validated());

        Mail::to('K4m1n4sh1@yandex.ru')->send(
            new ContactFormMail($request->validated()));

        return back()->with('success', 'Сообщение отправлено!');
    }
}