<?php

namespace App\Http\Controllers\Auth;

use App\Calendar;

use Illuminate\Http\Request;

use Validator;
use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalendarController extends Controller
{
    protected $calendar;

    public function __construct()
    {
        $this->calendar = new Calendar();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendar = $this->calendar->get();

        $events = [];

        foreach ($calendar as $item){
            $events[] = \Calendar::event(
                $item->naam, //event title
                false, //full day event?
                $item->start_tijd, //start time (you can also use Carbon instead of DateTime)
                '2017-03-12T1005', //end time (you can also use Carbon instead of DateTime)
                0 //optionally, you can specify an event ID
            );
        }

        $events[] = \Calendar::event(
            'Event One', //event title
            false, //full day event?
            '2017-03-12T0800', //start time (you can also use Carbon instead of DateTime)
            '2017-03-12T1005', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "Valentine's Day", //event title
            false, //full day event?
            '2017-3-12 20:25:25', //start time (you can also use Carbon instead of DateTime)
            '2017-3-12 23:25:25', //end time (you can also use Carbon instead of DateTime)
            '123', //optionally, you can specify an event ID
            [
                'url' => 'http://full-calendar.io',
                'editable' => true
            ]
        );

        $calendar = \Calendar::addEvents($events)
        ->setOptions([
            'firstDay' => 1
        ])->setCallbacks([
//            'viewRender' => ''
        ]);

        return view('auth.calendar.index')->with('calendar', $calendar);
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
        $calendar = $this->calendar;

        $rules = [
//            'task_name' => 'required',
//            'user' => 'required',
//            'moscow' => 'required',
//            'do_min' => 'required',
//            'project_id' => 'required',
//            'status' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('board.calendar.index')
                ->withErrors($validator)
                ->withInput();
        }
//        dd(Carbon::createFromFormat('Y-m-d', $request->start_tijd)->toDateTimeString());

        $calendar->naam = $request->naam;
        $calendar->start_tijd = Carbon::createFromFormat('Y-m-d', $request->start_tijd)->toDateTimeString();

        $calendar->save();

        \Session::flash('succes_message','successfully.');

        return redirect()->route('board.calendar.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
