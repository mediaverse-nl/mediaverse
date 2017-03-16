<?php

namespace App\Http\Controllers\developer;

use Illuminate\Http\Request;

use App\Calendar;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RoosterController extends Controller
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
        $calendar = $this->calendar->where('user_id', Auth::user()->id)->get();
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
                    'url' => route('developer.rooster.show', $item->id),
                    'editable' => false,
                    'color' => $filtered->count() != 0 ? $filtered[0]['color'] : '#ddd'
                ]
            );
        }

        $calendar = \Calendar::addEvents($events)
            ->setOptions([
                'firstDay' => 1
            ])->setCallbacks([
//                'eventDrop' =>
            ]);

        return view('admin.developer.rooster.index')->with('calendar', $calendar)->with('list_today', $list_today);
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
