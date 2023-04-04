<?php

namespace App\Http\Controllers;

use App\Models\form;


use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form (){
        return view('form');
    }

    public function store(Request $request){

        $validation=$request->validate(
            [
                'email'=>'required',
                'password'=>'required'
            ],[
                'password'=>'Nikita Please Enter the password'
            ]
        );
        $data=new form();
        $data->email=$request->email;
        $data->password=$request->password;
        $data->save();
        return redirect()->route('table')->with('msg','data has been stored ');
}
public function table(){
    $data=form::all();
    return view('table',compact('data'));
}
public function edit($id){
    $data=form::find($id);
    // dd($data);
    return view('edit',compact('data'));
}

public function update(Request $request,$id){

    $validation=$request->validate(
        [
            'email'=>'required',
            'password'=>'required'
        ],[
            'password'=>'Nikita Please Enter the password'
        ]
    );


    $data=form::find($id);
    $data->email=$request->email;
    $data->password=$request->password;
    $data->save();
    // dd($data);
    return redirect()->route('table');
    // dd($request);
}
public function destroy($id){
    $data=form::find($id);
    $data->delete();
    return redirect()->route('table');
}

public function contact(){
    return view('contact');
}

public function home(){
    return view('home');
}

public function about(){
    return view('about');
}
}
