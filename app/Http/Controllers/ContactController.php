<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\ContactFormRequest;
use Mail;
use App\Subscriber;
use App\Http\Requests;

class ContactController extends Controller
{
    public function sendmail(ContactFormRequest $request)
    {
        Mail::send('emails.send',
            array(
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'user_message' => $request->get('message')
                ), 
                function($message) use ($request)
                {
                    $persons = User::all();
                    foreach ($persons as $person) {
                        $message->from($request->input('email'));
                        $message->to($person->email);
                        $message->subject("Contact feedback from {$request->input('name')}");
                    }
                });
           return view('pages.contact');
    }

    public function subscriberStore(Request $request)
    {
        $this->validate($request, array(
            'email' => 'required|email'
        ));
        $subscriber = new Subscriber();
        $subscriber->email = $request->email;

        $subscriber->save();

        return view('pages.subscribe');

    }
}
