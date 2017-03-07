<?php

namespace App\Http\Controllers\marketing;

use App\TextEditor;
use Illuminate\Http\Request;

use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TextEditorController extends Controller
{
    protected $page;

    public function __construct()
    {
        $this->this_page =
        $this->page = new TextEditor;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'page' => 'required',
            'textarea' => 'required|max:6000',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->bacl()
                ->withErrors($validator)
                ->withInput();
        }

        $content = $this->page;

        $content->text = $request->textarea;
        $content->page = $request->page;

        $content->save();

        \Session::flash('succes_message', 'successfully.');

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
            'page' => 'required',
            'textarea' => 'required|max:6000',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $content = $this->page->where('page', $request->page)->first();

        $content->text = $request->textarea;

        $content->save();

        \Session::flash('succes_message', 'successfully.');

        return redirect()->back();
    }
}
