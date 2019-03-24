<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class PagesController extends Controller
{
    public function index(){
    	return view('pages.index');
    }
    public function menu(){
    	return view('pages.menu');
    }
    public function about(){
    	return view('pages.about');
    }
    public function contact(){
    	return view('pages.contact');
    }
    public function postContact(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        $data = array(
            'name' => $request -> name,
            'phone' => $request -> phone,
            'bmessage' => $request -> message
        );

        Mail::send('email.contact', $data, function($message) use ($data){
            $message->from($data['name']);
            $message->to('13db41f0dc-3dbf03@inbox.mailtrap.io');
        });

        return redirect('/')->with('success','Your message is sent!!');
    }
    public function gallery(){
    	return view('pages.gallery');
    }
    public function korean_traditional_foods(){
    	return view('pages.korean_traditional_foods');
    }
    public function liveevent(){
    	return view('pages.liveevent');
    }
    public function reserve(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' =>'required',
            'bookdate' => 'required',
            'time' => 'required'
        ]);
        $data = array(
            'name' => $request -> name,
            'phone' => $request -> phone,
            'bookdate' => $request -> bookdate,
            'time' => $request -> time
        );
        Mail::send('email.reserve', $data, function($message) use ($data){
            $message->from($data['name']);
            $message->to('13db41f0dc-3dbf03@inbox.mailtrap.io');
        });

        return redirect('/')->with('success','You are reserved successfully!!');
        
    }
}
