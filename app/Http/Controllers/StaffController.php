<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');

        $this->image_url = 'images/gallery';
    }
    public function addStaff(){
    	return view('staff.create');
    }

    public function store(Request $request){
    	$this->validate($request, [
    		'name' => 'required',
    		'designation' => 'required',
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

    		
    		$staff= new Staff;
    		$staff->name = $request->input('name');
    		$staff->designation = $request->input('designation');
    		$staff->image=$image_name;
    		$staff->save();
    	
    		return redirect('/admin')->with('success','Staff added');
        }
    public function edit($id){
        $staff = Staff::find($id);
        return view('staff.edit')->with('staff',$staff);
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            'name' => 'required',
    		'designation' => 'required',
        ]);


            $staff= Staff::find($id);
            $staff->name = $request->input('name');

            $staff->designation = $request->input('designation');
            $staff->save();
            
            return redirect('/admin')->with('success','Staff updated');
    }
    public function destroy($id){
        $staff = Staff::find($id);
        $staff -> delete();
        return redirect('/admin')->with('success', 'Staff Removed');
    }
    public function show($id)
    {
        $staff = Staff::find($id);
        return view('staff.show')->with('staff',$staff);
    }
    public function listStaff()
    {
        $staff = Staff::all();
        return view('staff.list')->with('staff',$staff);
    }
}

