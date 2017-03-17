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
        $list_today = $this->calendar->whereDay('start_tijd', '=', date('d'))->get();
        $EventColors = Calendar::calendarEventColors();

        $events = [];

        foreach ($calendar as $item){

            $filtered  = $EventColors->where('status', $item->status);

            $filtered->first();

            $events[] = \Calendar::event(
                $item->naam,
                false,
                $item->start_tijd,
                $item->eind_tijd,
                $item->id,
                [
                    'url' => route('board.calendar.show', $item->id),
                    'class' => 'asdasd',
                    'id' => 'asdasd',
                    'editable' => false,
                    'color' => $filtered->count() != 0 ? $filtered->collapse()['color'] : '#ddd'
                ]
            );
        }

        $events[] = \Calendar::event(
            'Event One', //event title
            false, //full day event?
            '2017-03-12T0200', //start time (you can also use Carbon instead of DateTime)
            '2017-03-12T1005', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
        );

        $calendar = \Calendar::addEvents($events)
        ->setOptions([
            'firstDay' => 1
        ])->setCallbacks([
            'eventDrop' => "
                function(event, delta, revertFunc) {
                    var title = event.title;
                    var start = event.start.format();
                    var end = (event.end == null) ? start : event.end.format();
                    $.ajax({
                      url: 'process.php',
                      data: 'type=resetdate&title='+title+'&start='+start+'&end='+end+'&eventid='+id,
                      type: 'POST',
                      dataType: 'json',
                      success: function(response){
                        if(response.status != 'success')
                        revertFunc();
                      },
                      error: function(e){
                        revertFunc();
                        alert('Error processing your request: '+e.responseText);
                      }
                  });
                }"
        ]);

        return view('auth.calendar.index')->with('calendar', $calendar)->with('list_today', $list_today);
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

//        Carbon::createFromFormat('Y-m-d', $request->start_tijd)->toDateTimeString();
        $calendar->status = $request->status;
        $calendar->naam = $request->naam;
        $calendar->titel = $request->titel;
        $calendar->eind_tijd = $request->eind_tijd.' '.($request->tijd_uur_eind ? :'00').':'.($request->tijd_min_eind ? :'00').':00';
        $calendar->start_tijd = $request->start_tijd.' '.($request->tijd_uur ? :'00').':'.($request->tijd_min ? :'00').':00';

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
        $calendar = $this->calendar->find($id);

        return view('auth.calendar.show')->with('calendar', $calendar);
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
    public function update(Request $request)
    {
        $calendar = $this->calendar->find($request->id);

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

        $calendar->user_id = $request->user;
        $calendar->naam = $request->naam;
        $calendar->titel = $request->titel;
        $calendar->status = $request->status;
//        $calendar->eind_tijd = Carbon::createFromFormat('Y-m-d', $request->eind_tijd)->toDateTimeString();
        $calendar->start_tijd = Carbon::createFromFormat('Y-m-d', $request->start_tijd)->toDateTimeString();

        $calendar->save();

        \Session::flash('succes_message','successfully.');

        return redirect()->route('board.calendar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = $this->calendar->findOrFail($id);
        $item->delete();

        return Redirect()->route('board.calendar.index');
    }
}
