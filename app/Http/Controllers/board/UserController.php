<?php

namespace App\Http\Controllers\board;

use App\Role;
use App\User;
use App\Skill;

use Illuminate\Http\Request;
use Validator;
use Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    protected $users;
    protected $roles;

    public function __construct()
    {
        $this->users = new User();
        $this->roles = new Role();
        $this->skill = new Skill();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.board.user.index')->with('users', $this->users->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.board.user.edit')
            ->with('user', $this->users->find($id))
            ->with('roles', $this->roles->get())
            ->with('skills', $this->skill->get());
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
        $user = $this->users->find($request->id);

        $rules = [
//            'skill' => 'required|unique:skill,skill,'.$request->id,
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('board.user.edit', $request->id)
                ->withErrors($validator)
                ->withInput();
        }

        $user->address = $request->address;
        $user->postcode = $request->postcode;
        $user->name = $request->name;
        $user->telefoon = $request->telefoon;
        $user->bank_id = $request->bank_id;
        $user->hourly_wage = $request->hourly_wage;

        if (Input::hasFile('profile_image')){
            $image = Input::file('profile_image');
            $extension = $image->getClientOriginalExtension();
            $new_filename = str_random(5) . '.' . $extension;
            $image->move(public_path().'/images/profile/', $new_filename);
            $user->profile_image = $new_filename;
        }

        $user->save();

        if(!empty($request->roles)){
            $user->userRole()->where('user_id', $request->id)->delete();

            foreach ($request->roles as $role){
                $user->userRole()->insert([['user_id' => $request->id, 'role_id' => $role,],]);
            }
        }

        if(!empty($request->skills)){
            $user->userSkill()->where('user_id', $request->id)->delete();

            foreach ($request->skills as $skill){
                $user->userSkill()->insert([['user_id' => $request->id, 'skill_id' => $skill,],]);
            }
        }

        \Session::flash('succes_message','successfully.');

        return redirect()->route('board.user.edit', $request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
