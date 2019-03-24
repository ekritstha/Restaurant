<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\slidehead;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->image_url = 'images/gallery';
    }
    public function addTest(){
    	return view ('admin.create');
    }

    public function store(Request $request){
    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required',
    		'cname'=> 'required',
    		'source'=> 'required',
    	]);
    		$test= new Test;
    		$test->title = $request->input('title');
    		$test->description = $request->input('description');
    		$test->cname = $request->input('cname');
    		$test->source = $request->input('source');
    		$test->save();
    	
    		return redirect('/admin')->with('success','Testimonial added');
        }
    public function edit($id){
        $test = Test::find($id);
        return view('admin.edit')->with('test',$test);
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            'title' => 'required',
    		'description' => 'required',
    		'cname'=> 'required',
    		'source'=> 'required',
    	]);
    		$test= Test::find($id);
    		$test->title = $request->input('title');
    		$test->description = $request->input('description');
    		$test->cname = $request->input('cname');
    		$test->source = $request->input('source');
    		$test->save();
        
            return redirect('/admin')->with('success','Testimonial updated');
    }
    public function destroy($id){
        $test = Test::find($id);
        $test -> delete();
        return redirect('/admin')->with('success', 'Testimonial Removed');
    }
    public function show($id)
    {
        $test = Test::find($id);
        return view('admin.show')->with('test',$test);
    }
    public function listTest()
    {
        $test = Test::all();
        return view('admin.list')->with('test',$test);
    }
    public function addSlide(){
        return view ('slider.create');
    }

    public function sstore(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'order' => 'required',
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

            
            $slide= new slidehead;
            $slide->title = $request->input('title');
            $slide->description = $request->input('description');
            $slide->order = $request ->input('order');
            $slide->image=$image_name;
            $slide->save();
        
            return redirect('/admin')->with('success','Slider added');
        }
    public function sedit($id){
        $slide = slidehead::find($id);
        return view('slider.edit')->with('slide',$slide);
    }
    public function supdate(Request $request,$id){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'order' => 'required',
        ]);
            $slide= slidehead::find($id);
            $slide->title = $request->input('title');
            $slide->description = $request->input('description');
            $slide->order = $request ->input('order');
            $slide->save();
        
            return redirect('/admin')->with('success','Slider updated');
    }
    public function sdestroy($id){
        $slide = slidehead::find($id);
        $slide -> delete();
        return redirect('/admin')->with('success', 'Slider Removed');
    }
    public function listSlide()
    {
        $slide = slidehead::all();
        return view('slider.list')->with('slide',$slide);
    }
    public function admin(){
        return view('home');
    }
}
