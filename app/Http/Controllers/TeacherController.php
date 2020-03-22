<?php

namespace App\Http\Controllers;

use App\Login;
use App\Student;
use App\StudentTeacher;
use App\Subject;
use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    public function selectdelStudent()
    {
        $tch_cnic=Login::all()->last()->cnic;
        $user=StudentTeacher::where('tch_cnic', $tch_cnic)->get();
        return view('TeacherPanel\delStudent',compact('user'));
        
    }
    public function delSelectStudent($cnic)
    {
        StudentTeacher::where('std_cnic', $cnic)->delete();;
        
        return redirect()->back();
        
    }
    public function Home()
    {

       
        $tch_cnic=Login::all()->last()->cnic;
        $std=StudentTeacher::where('tch_cnic', $tch_cnic)->get()->count();
        $sub=Subject::all()->count();
        
       

        return view('TeacherPanel\Teacherhome',[
            'Student'=>$std,
            'Subject'=>$sub
        ]);
        
    }

    public function tchSignup()
    {
        //
        return view('LoginPage.signup_tch');
    }
    public function tchRegister(Request $request)
    {
        //
        if ($request->password==$request->confirm_password) {
            $addTeacher=new Teacher();

            $addTeacher->name=$request->tch_name;
            $addTeacher->phone=$request->tch_phone;
            $addTeacher->cnic=$request->tch_cnic;
            $addTeacher->password=$request->password;

            

            $addTeacher->save();

            return redirect()->route('adminHome');

        }
        else
        {
            echo '<script language="javascript">';
            echo 'alert("Password is Incorrect, Try Again!!")';
            echo '</script>';
        }

    }


    public function showAll()
    {

        $user=Teacher::all();
        return view('AdminPanel.allTeachers',compact('user'));
        //
    }


    
    public function showUpdate()
    {
        //
        $user=Teacher::all();
        return view('AdminPanel.updateTeachers',compact('user'));
    }
    public function edit($id)
    {
        //
        // return 'here it is';
        return view('AdminPanel.editTeachers',compact('id'));
    }
    public function update(Request $request,$cnic)
    { 
        
        
        if ($request->password==$request->confirm_password) {
            
            Teacher::where('cnic',  $cnic)->update([
                'name' => $request->tch_name,
                'phone' => $request->tch_phone,
                'cnic' => $request->tch_cnic,
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


    public function showDelete()
    {
        //
        $user=Teacher::all();
        return view('AdminPanel.deleteTeachers',compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cnic)
    {
        
        $data=new Teacher();
        //
        // $data=Admin::find($request->cnic);
        Teacher::where('cnic', $cnic)->delete();;
       

        
        return redirect()->back();      // Reload previous page
    }


    public function selectStudent()
    {
        $user=Student::all();
        return view('TeacherPanel\addStudent',compact('user'));


    }

    public function addStudent($std_cnic)
    {
        $tch_cnic=Login::all()->last()->cnic;
        $stdTeacher=new StudentTeacher();
        $stdTeacher->std_cnic=$std_cnic;
        $stdTeacher->tch_cnic=$tch_cnic;

        $stdTeacher->save();

        return redirect()->route('TeacherHomeView');
        


    }

    
}
