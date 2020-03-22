<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Teacher;
use App\Student;
use App\Subject;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tch=Teacher::all()->count();
        $std=Student::all()->count();
        $sub=Subject::all()->count();
        
        return view('AdminPanel.adminPanel',[
            'Teacher'=>$tch,
            'Student'=>$std,
            'Subject'=>$sub
        ]);
        // return $tch;
    }

    public function adminSignup()
    {
        //
        return view('LoginPage.signup_admin');
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
        if($request->admin_password==$request->admin_confirmpassword)
        {
            //Register New Admin
        $new_admin= new Admin();
        $new_admin->name=$request->admin_name;;
        $new_admin->phone=$request->admin_phone;
        $new_admin->cnic=$request->admin_cnic;
        $new_admin->password=$request->admin_password;

        $new_admin->save();
        return redirect()->back();

        }
        else
        {
            echo '<script language="javascript">';
            echo 'alert("Password is Incorrect, Try Again!!")';
            echo '</script>';
        }
        
        
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
