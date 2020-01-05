<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobMail;
use App\Mail\ContactEmail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
            $job = array(
                'firstname' => $request->firstname,
                'jobname' => $request->jobname,
                'jobid' => $request->jobid,
                'lastname' => $request->lastname,
                'pdf' => $request->pdffile,
                'category' => $request->category,
                'city' => $request->city
            );

         
         
          
            Mail::to('test@test.com')->send(new JobMail($job));

            return back()->with('success', 'Bedankt dat je contact met ons hebt opgenomen. Je hebt binnen 48 uur op Hoop4eu gereageerd!');

    }

    public function contact(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'message' => 'required',
        ],
        [
            'firstname.required' => 'Naam is verplicht',
            'lastname.required' => 'Achternaam is verplicht',
            'email.required' => 'Email is verplicht',
            'message.required' => 'Message is verplicht'
        ]);

        Mail::to('test@test.com')->send(new ContactEmail($data));
        return back()->with('success', 'Bedankt dat je contact met ons hebt opgenomen. Uw bericht is succesvol verzonden!');
    }


}
