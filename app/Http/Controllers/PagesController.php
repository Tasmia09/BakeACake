<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;
use Auth;
use Session;

class PagesController extends Controller
{

    /*Display Home Page*/

     /*public function show($id)
    {
        //withImage is with'variableName'

        $image = Image::findOrFail($id);
        return view('Pages.homePage')->withImage($image);

        $image= Image::locatedAt($title,$flavor)->first();
        
        return view('images.show',compact('image'));
        //return Image::where(compact('title','flavor'))->first();
    }*/


 public function __construct(){
        $this->middleware('auth');
    }


    public function home(){
         
        
        return view ('Pages.homePage');
    }

     public function contact(){
         
        
        return view ('Pages.contactPage');
    }


    /*Display About Page*/

    public function about(){
        return view ('Pages.aboutPage');
    }

    public function gallery(Request $request){
        //return view ('Pages.gallery');

        $tasmia = Image::all();
        return view('Pages.gallery')->withtasmia($tasmia);
    }

    public function cartAdd(Request $request){
        
        $input=$request->input('title');
        
        dd($input);

    }
}
