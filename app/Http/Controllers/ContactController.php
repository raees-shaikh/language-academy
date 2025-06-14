<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Contact;
use App\Course;

class ContactController extends Controller
{
    public function submitContact(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|alpha',
                'mobile_number' => 'required|numeric|digits:10',
                'email' => 'required|email',
                'subject' => 'required|string',
                'message' => 'required',
                // 'g-recaptcha-response' => 'required|captcha',

            ],
            [
                'name.required' => ' Name is required',
                'mobile_number.required' => ' Mobile number is required',
                'email.required' => ' Email is required',
                'subject.required' => ' Subject is required',
                'message.required' => ' Mesaage is required',
                // 'g-recaptcha-response.required'=>'Recaptcha is required',
            ]
        );

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->mobile_number = $request->mobile_number;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        $data = array(
            'email' => $request->email,
            'contact' => $contact->toArray(),
        );
        $data = (object) $data;

        Mail::send('emails.contact', ['data' => (array) $data->contact], function ($message) use ($data) {
            $message->from($data->email,$data->contact['name']);
            $message->to(env('MAIL_TO_ADDRESS'));
            $message->subject('Enquiry from website');
            $message->replyTo($data->email, $data->contact['name']);
        });

        if (Mail::failures()) {
            $notification = array(
                'message' => 'Something went wrong.',
                'alert-type' => 'error'
            );
        } else {
            $notification = array(
                'message' => 'Message sent successfully!',
                'alert-type' => 'success'
            );
        }

        return redirect()->back()->with($notification);
    }

    public function showContact()
    {
        $courses = Course::all();
        return view('contact', ['courses' => $courses]);
    }

}
