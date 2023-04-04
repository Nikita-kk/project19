<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
 public function create(){
    return view('blog.create');
 }
  public function store(Request $request){
    $data=new Blog();
        $data->title=$request->title;
        $data->description=$request->description;
        if($request->hasFile('image'))
        {
            $file=$request->image;
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads',$filename);
            $data->image=$filename;
        }
        $data->save();
        return redirect()->route('blog.table');
  }
    public  function table(){
        $data=Blog::all();
        return view('blog.table',compact('data'));
    }
    public function edit($id){
        $data=Blog::find($id);

        return view('blog.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $data=Blog::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        if($request->hasFile('image'))
        {
            $file=$request->image;
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads',$filename);
            $data->image=$filename;
        }
        $data->save();
        return redirect()->route('blog.table');
    }
  }

