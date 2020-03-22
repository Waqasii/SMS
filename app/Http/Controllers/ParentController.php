<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stdParent;
class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function parRegister(Request $request)
    {
        //
        if ($request->password==$request->confirm_password) {
            // $addStudent=new Student();
            $addParent=new stdParent();

            // $addStudent->name=$request->std_name;
            // $addStudent->phone=$request->std_phone;
            // $addStudent->cnic=$request->std_cnic;
            // $addStudent->fcnic=$request->father_cnic;
            // $addStudent->password=$request->password;

            $addParent->name=$request->father_name;
            $addParent->phone=$request->father_phone;
            $addParent->cnic=$request->father_cnic;
            $addParent->password=$request->password;

            // $addStudent->save();
            $addParent->save();

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

    public function registerForm()
    {
        //
        return view('LoginPage');
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
