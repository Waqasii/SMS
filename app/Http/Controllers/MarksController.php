<?php

namespace App\Http\Controllers;

use App\StudentTeacher;
use App\Login;
use App\Marks;
use Illuminate\Http\Request;

class MarksController extends Controller
{
    //
    public function Report()
    {
        $tch_cnic=Login::all()->last()->cnic;
        $user=Marks::where('tch_cnic', $tch_cnic)->get();
        return view('TeacherPanel\marksReport',compact('user'));        
    }

    public function showEnterMarks()
    {
        $tch_cnic=Login::all()->last()->cnic;
        $user=StudentTeacher::where('tch_cnic', $tch_cnic)->get();
        return view('TeacherPanel\showEnterMarks',compact('user'));
        
    }

    public function enterMarks($id)
    {
        return view('TeacherPanel\EnterMarks',compact('id'));        
    }

    public function marksSave(Request $request,$id)
    {
        $mark=new Marks();
        $mark->tch_cnic=Login::all()->last()->cnic;;
        $mark->std_cnic=$id;
        $mark->Name=$request->test_name;
        $mark->Total=$request->tmarks;
        $mark->Obtained=$request->omarks;
        $mark->save();
        return redirect()->back();


    }
}
