<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Xray;
use App\Models\DemanTest;
use Image;
use File;
class XrayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demands=DemanTest::where('xray_required', 'yes')->get();
         return view('xr.dashboard', compact('demands'));
       // return view('xr.dashboard');
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

        $request->validate([
            'patient_id'  => 'required',
            'user_image' => 'required|image|max:2048'
           ]);
      
           $image_file = $request->user_image;
      
           $image = Image::make($image_file);
      
           Response::make($image->encode('jpeg'));
      
           $form_data = array(
            'patient_id'  => $request->patient_id,
            'image' => $image
           );
      
           Xray::create($form_data);

           $id=$request->patient_id;
           $demand=DemanTest::where('patient_id', $id)->get();
           foreach($demand as $deman){
           $deman->patient_id=$id;
           $deman->xray_required='no';
           $deman->save();}
      
           //return redirect()->back()->with('success', 'Image store in database successfully');
           return redirect('/xr'); 
        /*$xr=new Xray;
        $xr->patient_id=$request->patient_id;
        //$image_file=$request->img;
        $img=Image::make($request->file('photo'));
        Response::make($img->encode('jpeg'));
        $xr->image=$img;
        $xr->save();*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('xr.show', compact('id'));
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
