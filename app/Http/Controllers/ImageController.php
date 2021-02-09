<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\User;
use Redirect;
use DB;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    
    public function index()
    {
        return view('image');
    }
 
    public function save( Request $request)
    {
       request()->validate([
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('fileUpload')) {
           $destinationPath = 'public/image/'; // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
        }
          $check = Image::insertGetId(
                ['image' => 'me.jpg','user_id' => Auth::id()]
              );
      //  $check = Image::insertGetId($insert);
       //Image::insert(['user_id' => Auth::id()]);
 
        return Redirect::to("image")
        ->withSuccess('Great! Image has been successfully uploaded.');
 
    }

    public function display(){
              
        $images = User::find(1)->images;
        $images = $images->get();
        return view ('status',['images'=>$images]);
        
      } 

      public function display2(){
        $images = DB::table('images');
        $images = $images->get();
        return view ('controls',['images'=>$images]);
      } 
}
