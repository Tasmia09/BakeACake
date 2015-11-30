<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ImageRequest;
use App\Http\Controllers\Controller;
use App\Image;
use App\Photo;
use Session;

class ImagesController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $images = Image::all();


        return view('images.index')->withImages($images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
        //
        //dd($request->all());

         $input = $request->all();

        Image::create($input);

        Session::flash('flash_message', 'Image successfully added!');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //withImage is with'variableName'

        $image = Image::findOrFail($id);
        return view('images.show')->withImage($image);

        /*$image= Image::locatedAt($title,$flavor)->first();
        
        return view('images.show',compact('image'));*/
        //return Image::where(compact('title','flavor'))->first();
    }


    public function addPhoto($id, Request $request){

        $file = $request->file('file');

        $name=time().$file->getClientOriginalName();

        $file->move('image/photos',$name);

        $image = Image::findOrFail($id)->first();

        $image->image()->create(['path'=> "/image/photos/{$name}"]);

        /*$image= Image::locatedAt($title,$flavor)->first();

        $image->photos()->create(['path'=> "/image/photos/{$name}"]);
*/
        return 'Done';
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

        $image = Image::findOrFail($id);

        return view('images.edit')->withImage($image);
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

        $image = Image::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        $image->fill($input)->save();

        Session::flash('flash_message', 'Image successfully updated!');

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        $image = Image::findOrFail($id);

        $image->delete();

        Session::flash('flash_message', 'Image successfully deleted!');

        return redirect()->route('images.index');

    }
}
