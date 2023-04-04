<?php

namespace App\Http\Controllers;

use App\Models\Category;


use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function create(){
    return view('category.create');
  }

  public function store(Request $request){
        $data=new category();
        $data->name=$request->name;
        $data->save();
        return redirect()->route('category.table');
  }
  public function table(){
    $data=category::all();
    return view('category.table',compact('data'));
}
public function edit($id){
    $data=category::find($id);
    // dd($data);
    return view('category.edit',compact('data'));
}

public function delete($id){
    $data=category::find($id);
    $data->delete();
    return redirect()->route('category.table');
}
public function update(Request $request,$id){
    $data=category::find($id);
    $data->name=$request->name;
    $data->save();
    // dd($data);
    return redirect()->route('category.table');
    // dd($request);
}
}
