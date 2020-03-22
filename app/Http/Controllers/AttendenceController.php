<?php

namespace App\Http\Controllers;

use App\Attendence;
use Illuminate\Http\Request;
use App\StudentTeacher;
use App\Login;
class AttendenceController extends Controller
{
    //
    public function getAttendence()
    {
        $tch_cnic=Login::all()->last()->cnic;
        $user=StudentTeacher::where('tch_cnic', $tch_cnic)->get();
        return view('TeacherPanel\attendenceShow',compact('user'));
        
    }
    public function Present($id)
    {
       $att=new Attendence();
       $att->std_cnic=$id;
       $att->tch_cnic=Login::all()->last()->cnic;
       $att->status='Present';
       $att->save();
       return redirect()->back();
        
    }
    public function Absent($id)
    {
        $att=new Attendence();
        $att->std_cnic=$id;
        $att->tch_cnic=Login::all()->last()->cnic;
        $att->status='Absent';
        $att->save();
        return redirect()->back();

        
    }


    public function showAttendence()
    {
        $tch_cnic=Login::all()->last()->cnic;
        $user=Attendence::where('tch_cnic', $tch_cnic)->get();
        return view('TeacherPanel\attendencelist',compact('user'));
    }
}
