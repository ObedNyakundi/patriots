<?php

namespace App\Http\Controllers;

use Intervention\Image\Laravel\Facades\Image; //image magic facade
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

//file manipulation facade
use Illuminate\Support\Facades\File;
//authentication facade
use Illuminate\Support\Facades\Auth;

use App\Models\Patriots;
use Illuminate\Http\Request;

class PatriotsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //display a form to add details of the patriot
        return view('people.patriots.create');
    }

    /**
     * Store a newly created patriot pending administrator approval.
     */
    public function store(Request $request)
    {
        //making a new image manager
        $imgmanager = new ImageManager(new Driver());
        //store the details of the new patriot
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
           /* 'name' => 'required|string|max:255|alpha_dash',
            'place_of_birth' => 'required|string|max:255|alpha_dash',
            'date_of_birth' => 'required|date|before: -5 years',
            'date_of_death' => 'required|date|before: today',*/
        ]);

       

        /************************
         *  Image manipulation *
         * **********************/
        //watermark
        $watermark=$imgmanager->read(public_path('/assets/watermark.png'));
        $watermarkPosition = 'bottom-left';
        $watermarkopacity=60;

        //upload our image
        $img=$request->file('image');
        //give it a new name
        $imgname=time().'.'.$img->getClientOriginalExtension();
        //moving the image
        $img->move('uploads',$imgname);
        //read the uploaded image
        $image=$imgmanager->read('uploads/'.$imgname);
        //scale the image to 200x300 to conserve storage, but keep aspect ratio
        $image->coverDown(200, 300);
        //add our watermark
        $image->place($watermark, $watermarkPosition,5,5,$watermarkopacity);
        $image->save('uploads/patriots/'.$imgname);
        //delete the original file
        FIle::delete(public_path('uploads/'.$imgname));

        //attempt insertion
         Patriots::create([
          'name'=>ucwords($request->input('name')),  
          'date_of_birth'=>$request->input('date_of_birth'),
          'place_of_birth'=>$request->input('place_of_birth'),
          'date_of_death'=>$request->input('date_of_death'),
          'place_of_death'=>$request->input('place_of_death'),
          'cause_of_death'=>$request->input('cause_of_death'),
          'gender'=>$request->input('gender'), 
          'image'=>$imgname,
          'added_by'=>Auth::user()->id,
          'approved_by'=>Auth::user()->id,
        ]);

         //redirect to specific profile
         return redirect()-> route('patriot.show',[Patriots::latest()->first()]);
    }

    /**
     * Display the specified resource.
     */
    public function show($patriots_id)
    {
        $patriot=Patriots::findorfail($patriots_id);
        return view('people.patriots.show',compact('patriot'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($patriots_id)
    {
        $patriot=Patriots::findorfail($patriots_id);
        return view('people.patriots.edit',compact('patriot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patriots $patriots)
    {

        //attempt insertion
         $patriots -> update([
          'name'=>ucwords($request->input('name')),  
          'date_of_birth' => $request->input('date_of_birth'),
          'place_of_birth'=>$request->input('place_of_birth'),
          'date_of_death'=>$request->input('date_of_death'),
          'place_of_death'=>$request->input('place_of_death'),
          'cause_of_death'=>$request->input('cause_of_death'),
          'gender'=>$request->input('gender'),
        ]);

         dd($request);
         //redirect to specific profile
         return redirect()-> route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patriots $patriots)
    {
        //
    }

     /**
     * Approve a patriot function for the admin.
     */
    public function approve($patriots_id)
    {
        Patriots::where('id',$patriots_id) -> update(['is_approved'=>1]);
        
        return redirect() ->route('dashboard');
    }
}
