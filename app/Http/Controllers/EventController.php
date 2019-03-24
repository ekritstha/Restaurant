<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->image_url = 'images/gallery';
    }
    public function addEvent(){
    	return view ('events.create');
    }

    public function store(Request $request){
    	$this->validate($request, [
    		'event_title' => 'required',
    		'event_details' => 'required',
            'location'=> 'required',
    		'date'=> 'required',
    		'time'=> 'required',
    		'image'=> 'image|nullable|max:1999'
    	]);
    		//handle file upload
    		if (!file_exists($this->image_url)) {
            mkdir($this->image_url);
        }

        if ($image = $request->file('image')) {
            $image_name = str_replace(' ', '_', rand(1857, 9899) . '_' . $image->getClientOriginalName());
            $image->move($this->image_url, $image_name);
        }

    		
    		$event= new Event;
    		$event->event_title = $request->input('event_title');
    		$event->event_details = $request->input('event_details');
            $event->location = $request->input('location');
    		$event->date = $request->input('date');
    		$event->time = $request->input('time');
    		$event->image=$image_name;
    		$event->save();
    	
    		return redirect('/admin')->with('success','Event added');
        }
    public function edit($id){
        $event = Event::find($id);
        return view('events.edit')->with('event',$event);
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            'event_title' => 'required',
            'event_details' => 'required',
            'location' => 'required',
            'date'=> 'required',
            'time'=> 'required',
        ]);

            $event= Event::find($id);
            $event->event_title = $request->input('event_title');
            $event->event_details = $request->input('event_details');
            $event->location = $request -> input('location');
            $event->date = $request->input('date');
            $event->time = $request->input('time');
            $event->save();
        
            return redirect('/admin')->with('success','Event updated');
    }
    public function destroy($id){
        $event = Event::find($id);
        $event -> delete();
        return redirect('/admin')->with('success', 'Event Removed');
    }
    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show')->with('event',$event);
    }
    public function listEvent()
    {
        $event = Event::all();
        return view('events.list')->with('event',$event);
    }
}
