<?php

namespace App\Http\Controllers\Auth;

use App\Skill;
use App\User;
use Illuminate\Http\Request;

use Validator;
use Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public $auth;
    public $skills;

    public function __construct()
    {
        $this->auth = Auth::user();
        $this->skills = new Skill();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profile.index')->with('user', $this->auth)->with('skills', $this->skills->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $user = User::find($this->auth->id);

        $rules = [
//            'name' => 'required|unique:project,name,'.$request->id,
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('profile.index')
                ->withErrors($validator)
                ->withInput();
        }


        if (Input::hasFile('profile_image')){
            $image = Input::file('profile_image');
            $extension = $image->getClientOriginalExtension();
            $new_filename = str_random(5) . '.' . $extension;
            $image->move(public_path().'/images/profile/', $new_filename);
            $user->profile_image = $new_filename;
        }

        $user->name = $request->name;
        $user->address = $request->address;
        $user->postcode = $request->postcode;
        $user->bank_id = $request->bank_id;

        $user->save();


        if(!empty($request->skills)){
            $user->userSkill()->where('user_id', $user->id)->delete();
            foreach ($request->skills as $skill){
                $user->userSkill()->insert([['user_id' => $user->id, 'skill_id' => $skill,],]);
            }
        }

        \Session::flash('succes_message','successfully.');

        return redirect()->route('profile.index');
    }
}
