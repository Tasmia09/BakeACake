<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;
use Session;
use Auth;

class BlogsController extends Controller
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
        $blogs = Blog::all();

        return view ('blogs.Blogindex')->withBlogs($blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('blogs.BlogCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $this->validate($request, [
        'title' => 'required',
        'description' => 'required',
        'author'=>'required'
]);

         $input = $request->all();
         //Blog::create($input);
         $user=Auth::user();
         $user->blog()->create($input);

        
        Session::flash('flash_message', 'Blog successfully added!');
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
        //
        $blog=Blog::findOrFail($id);

        return view ('blogs.BlogShow')->withBlog($blog);
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

        $blog = Blog::findOrFail($id);

        return view('blogs.BlogEdit')->withBlog($blog);
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

        $blog = Blog::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'author' => 'required'
        ]);

        $input = $request->all();

        $blog->fill($input)->save();

        Session::flash('flash_message', 'Blog successfully updated!');

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
        //

        $blog = Blog::findOrFail($id);

        $blog->delete();

        Session::flash('flash_message', 'Blog successfully deleted!');

        return redirect()->route('blogs.index');
    }
}
