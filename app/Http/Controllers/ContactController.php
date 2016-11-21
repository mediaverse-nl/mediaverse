<?php

namespace App\Http\Controllers;

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
            'naam' => 'required|alpha',
            'email' => 'required|email',
            'bericht' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->route('contact.create')
                ->withErrors($validator)
                ->withInput();
        }

        Mail::send('email', $request->all(), function($message) use ($request)
        {
            //$message->from($data['email'] , $data['first_name']); uncomment if using first name and email fields
            $message->from('info@mediaverse.nl', 'We zullen zo spoedig mogelijk contact met u opnemen.');
            //email 'To' field: cahnge this to emails that you want to be notified.
            $message->to($request->email, $request->name)->cc('feedback@gmail.com')->subject('feedback form submit');

        });

        \Session::flash('succes_message','Thanks for contacting us!');

        return redirect()->route('contact.create');
    }
}
