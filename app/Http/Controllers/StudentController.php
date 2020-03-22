<?php

namespace App\Http\Controllers;

use App\Notification;
use App\std_Parent;
use App\Student;
use App\stdParent;
use App\Login;
use App\Messages;
use App\Attendence;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAttendence()
    {
        $std_cnic=Login::all()->last()->cnic;
        $user=Attendence::where('std_cnic', $std_cnic)->get();
        return view('studentpanel\Attendance',compact('user'));
    }
    public function index()
    {
        //
        return view('LoginPage.index');
    }

    


    public function stdSignup()
    {
        //
        return view('LoginPage.signup_std');
        // return 'LoginPage.signup_std';
    // }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }


    public function stdRegister(Request $request)
    {
        //
        if ($request->password==$request->confirm_password) {
            $addStudent=new Student();
            $addParent=new stdParent();

            $addStudent->name=$request->std_name;
            $addStudent->phone=$request->std_phone;
            $addStudent->cnic=$request->std_cnic;
            $addStudent->fcnic=$request->father_cnic;
            $addStudent->password=$request->password;

            $addParent->name=$request->father_name;
            $addParent->phone=$request->father_phone;
            $addParent->cnic=$request->father_cnic;
            $addParent->password=$request->password;

            $addStudent->save();
            $addParent->save();

            return redirect()->route('adminHome');

        }
        else
        {
            echo '<script language="javascript">';
            echo 'alert("Password is Incorrect, Try Again!!")';
            echo '</script>';
        }






        // echo $request->std_name;
        // return 'i\'m in Student Register Function';
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
    }

    public function showAll()
    {

        $user=Student::all();
        return view('AdminPanel.allStudents',compact('user'));
        //
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
        // return 'here it is';
        return view('AdminPanel.editStudents',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$cnic)
    { 
        $new_stu=Student::where('cnic', $cnic)->first();
        // echo $new_stu;
        $parent_cnic=$new_stu->fcnic;
        echo $parent_cnic;
        
        if ($request->password==$request->confirm_password) {
            
            Student::where('cnic',  $cnic)->update([
                'name' => $request->std_name,
                'phone' => $request->std_phone,
                'cnic' => $request->std_cnic,
                'fcnic' => $request->father_cnic,
                'password' => $request->password
                ]);

            stdParent::where('cnic',  $parent_cnic)->update([
                'name' => $request->father_name,
                'phone' => $request->father_phone,
                'cnic' => $request->father_cnic,
                'password' => $request->password
                ]);

        

                return redirect()->route('adminHome');

        }
        else
        {
            echo '<script language="javascript">';
            echo 'alert("Password is Incorrect, Try Again!!")';
            echo '</script>';
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cnic)
    {
        
        $data=new Student();
        $new_stu=Student::where('cnic', $cnic)->first();
        $parent_cnic=$new_stu->fcnic;
        //


        // $data=Admin::find($request->cnic);
        Student::where('cnic', $cnic)->delete();;
        stdParent::where('cnic', $parent_cnic)->delete();;
        
        
        return redirect()->back();      // Reload previous page
    }
    public function showDelete()
    {
        //
        $user=Student::all();
        return view('AdminPanel.deleteStudents',compact('user'));
    }

    public function showUpdate()
    {
        //
        $user=Student::all();
        return view('AdminPanel.updateStudents',compact('user'));
    }

    public function StudentHome()
    {
        $noti=Notification::all();
       

        return view('studentpanel\Home',compact('noti'));
    }
    public function StudentNotification()
    {
        $noti=Notification::all();
       

        return view('studentpanel\notification',compact('noti'));
    }

    public function allMsg()
    {
        $std_cnic=Login::all()->last()->cnic;
        $user=Messages::where('reciept_cnic', $std_cnic)->get();
        return view('studentpanel\message',compact('user'));
    }
}  