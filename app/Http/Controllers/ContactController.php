<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

use Validator;
use Mail;

use App\Http\Requests;

class ContactController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [

        ];
        $rules = [
            'naam' => 'required|between:4,60|string',
            'email' => 'required|email|max:80',
            'telefoon_nr' => 'numeric|min:8',
            'bericht' => 'required|between:50,500|string',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->route('contact.create')
                ->withErrors($validator)
                ->withInput();
        }

        Mail::send('email.contact', ['request' => $request->all()], function($message) use ($request)
        {
            $message->from('info@mediaverse.nl', 'Mediaverse.nl.');
            $message->to($request->email, $request->naam)->subject('Contact formulier');
        });

        $contact = new Contact;

        $contact->name = $request->naam;
        $contact->mobile = $request->telefoon_nr;
        $contact->email = $request->email;
        $contact->message = $request->bericht;
        $contact->status = "none";

        $contact->save();

        \Session::flash('succes_message','Thanks for contacting us!');

        return redirect()->route('contact.create');
    }
}
