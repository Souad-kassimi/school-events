<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class eventController extends Controller
{
    public function home(){
        // $a=$eventsDay->pluck("event")->implode(', ');

        // $a=$eventsDay->map(function($event){
        //     return $event->event;
        // });
        // dd($a);
        // $a=$eventsDay->pluck("event");
        // return response()->json($a);

        $today = Carbon::today();
        $eventsDay=Event::where("event_day",$today)->get();
        $events=Event::all()->take(3);

        // $a=$eventsDay->pluck("event");
        // dd($a);
        // if ($eventsDay->isEmpty()) {
        //     $eventsDay = collect([ (object) [ // Cast to object
        //         'event' => 'There is no event today',
        //         'photo' => 'images/OFPPT.png',
        //         'event_day' => null,
        //         'time' =>null,


        //          // Replace with the actual path to the school photo
        //     ]]);
        // }
        return view("home")->with("eventsday",$eventsDay)->with("events",$events);
    }
    public function events(){
        $events=Event::all();
        $categories=Category::all();
        return view("listEvents")->with("events",$events)->with("categories",$categories);

    }
    public function index(){
        $events=Event::all();
        return view("eventList")->with("events",$events);
    }
    public function create(){
        $categories=Category::all();
        return view("addEvent")->with("categories",$categories);
    }
    public function store(Request $request){
        $request->validate([
            "event"=>"required",
            "responsable"=>"required",
            "guests"=>"required",
            "categorie"=>"required",
            "time"=>"required",
            "event_day"=>"required",
            "photo"=>"required|image|mimes:jpg,jpeg,png",
        ]);
        $photo=$request->file("photo");
        $photo_name=$photo->getClientOriginalName();
        $photo->move("images/upload",$photo_name);
        $Event=new Event();
    $Event->event=$request->input("event");
    $Event->responsable=$request->input("responsable");
    $Event->message=$request->input("message");
    $Event->guests=$request->input("guests");
    $Event->categorie_id=$request->input("categorie");
    $Event->time=$request->input("time");
    $Event->event_day=$request->input("event_day");
    $Event->photo="images/upload/".$photo_name;
    $Event->save();
    if(!$Event){
    return redirect()->route("event.create")->with("error","Adding Event is Failed");

    }
    return redirect()->route("event")->with("success","The event add to the list with success");

    }

    public function show($id){
        $event=Event::findOrFail($id);
        return view("eventDetail")->with("event",$event);
    }
    public function destroy($id){
        $event=Event::findOrFail($id);
        $event->delete();
        return redirect()->route("event")->with("success","The event  deleted with success");
}
}
