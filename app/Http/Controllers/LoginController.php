<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Login;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   
    public function checkLogin(Request $request)
    {
        

        if ($request->usertype=='admin')
        {
            $data=new Admin();
            //
            // $data=Admin::find($request->cnic);
            $data=Admin::where('cnic', $request->cnic)->first();
            // echo $data;
        }elseif ($request->usertype=='teacher')
        {
            $data=new Teacher();
            //
            // $data=Admin::find($request->cnic);
            $data=Teacher::where('cnic', $request->cnic)->first();
            // echo $data;
        }
        elseif ($request->usertype=='student')
        {
            $data=new Student();
            //
            // $data=Admin::find($request->cnic);
            $data=Student::where('cnic', $request->cnic)->first();
            // echo $data;
        }
       
        if ($data) {
            if ($request->usertype=='admin') {
                if ($data->cnic==$request->cnic  && $data->password==$request->password) {
                    $login=new Login();
                    $login->cnic=$request->cnic;
                    $login->password=$request->password;
                    $login->user_type='Admin';
                    $login->save();
                    return redirect()->route('adminHome');
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("User Not Found, Try Again!!")';
                    echo '</script>';
                }
            } elseif ($request->usertype=='teacher') {
                
                if ($data->cnic==$request->cnic  && $data->password==$request->password) {
                    $login=new Login();
                    $login->cnic=$request->cnic;
                    $login->password=$request->password;
                    $login->user_type='teacher';
                    $login->save();

                    // return view('TeacherPanel\Teacherhome',compact('tch'));
                    // return redirect()->route('TeacherHomeView');   
                    return redirect()->route('TeacherHomeView');   
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("User Not Found, Try Again!!")';
                    echo '</script>';
                }
            }if ($request->usertype=='student') {
                
                if ($data->cnic==$request->cnic  && $data->password==$request->password) {
                    $login=new Login();
                    $login->cnic=$request->cnic;
                    $login->password=$request->password;
                    $login->user_type='Student';
                    $login->save();

                    // return view('TeacherPanel\Teacherhome',compact('tch'));
                    // return redirect()->route('TeacherHomeView');   
                    return redirect()->route('StudentHome');   
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("User Not Found, Try Again!!")';
                    echo '</script>';
                }} else {
                echo '<script language="javascript">';
                echo 'alert("In Progress, Try Again!!")';
                echo '</script>';
            }//end of checking user type
        
        
            
        }//end if(data)
    }

    public function login()
    {
        //
        return view('LoginPage.index');
    }


    
}
