<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    public function addingstudent(Request $request){
        $items=new Students();
        $items ->name=$request->name;
        $items->age=$request->age;
        $items->address=$request->address;
        $items->course=$request->course;
        $items->subject=$request->subject;

        $items->save();
    }
}
