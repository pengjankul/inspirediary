<?php 
namespace App\Http\Controllers\Admins;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EventModel; 
use MaddHatter\LaravelFullcalendar\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CalendarController extends Controller 
{
    public function getIndex()
    {
        $events = [];

        $events[] = \Calendar::event(
            'Event One', //event title
            false, //full day event?
            '2015-02-11T0800', //start time (you can also use Carbon instead of DateTime)
            '2015-02-12T0800', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "Valentine's Day", //event title
            true, //full day event?
            new \DateTime('2015-10-14'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2015-10-14'), //end time (you can also use Carbon instead of DateTime)
            'stringEventId' //optionally, you can specify an event ID
        );

        $eloquentEvent = EventModel::first(); //EventModel implements MaddHatter\LaravelFullcalendar\Event

        $calendar = \Calendar::addEvents($events) //add an array with addEvents
        ->addEvent($eloquentEvent, [ //set custom color fo this event
            'color' => '#900',
        ])->setOptions([ //set fullcalendar options
            'firstDay' => 1
        ])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
            //'viewRender' => 'function() {alert("Callbacks!");}'
        ]); 
        
        return view('admin.calendar.index', compact('calendar'));
    }

    public function addEvent()
    {
       
        $post = Input::get('data');
        $data = ['post' =>$post];
        return $data;
      
    }


}