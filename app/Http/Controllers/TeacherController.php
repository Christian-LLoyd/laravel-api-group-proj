<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //

    public function addingteacher(Request $request){
        $items=new Teacher();
        $items ->name=$request->name;
        $items->age=$request->age;
        $items->address=$request->address;
        $items->department=$request->department;

        $items->save();
    }

    public function editteacher(Request $request){

        $items=Teacher::findorfail($request->id);

        $items ->name=$request->name;
        $items->age=$request->age;
        $items->address=$request->address;
        $items->department=$request->department;

        $items->update();

        return response()->json('edited succesfully');

    }

    public function deleteteacher(Request $request){
        $items=Teacher::findorfail($request->id)->delete();

        return response()->json('deleted succesfully');
    }

    public function getteacher(){
        $items=Teacher::all();

        return response()->json($items);
    }
}
