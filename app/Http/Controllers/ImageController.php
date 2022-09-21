<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Facades\Response;
use App\Models\Xray;

class ImageController extends Controller
{
    public function show($id){
    $xrays=Xray::where('patient_id', $id)->paginate(1);
    return view('showxray', compact('xrays'));
    }

    public function fetch($id){
    $image=Xray::findOrFail($id);

    $image_file = Image::make($image->image);

    $response = Response::make($image_file->encode('jpeg'));

    $response->header('Content-Type', 'image/jpeg');

    return $response;
    }
}
