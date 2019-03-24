<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class galleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->image_url = 'images/gallery';
    }
    public function addGallery(){
    	return view ('gallery.create');
    }
    public function store(Request $request){
    	$this->validate($request, [
            'name' => 'required',
            'category'=> 'required',
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

    		$gallery= new Gallery;
            $gallery->name = $request->input('name');
            $gallery->category = $request->input('category');
    		$gallery->image=$image_name;
    		$gallery->save();
    	
    		return redirect('/admin')->with('success','Added to the Gallery!');
    }
    public function destroy($id){
        $gallery = Gallery::find($id);
        $gallery -> delete();
        return redirect('/admin')->with('success', 'Removed from Gallery!');
    }
    public function listGallery()
    {
        $gallery = Gallery::all();
        return view('gallery.list')->with('gallery',$gallery);
    }
}
