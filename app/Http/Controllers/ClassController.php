<?php

namespace App\Http\Controllers;

use App\scClass;
use App\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function delShow()
    {
        //
        $class=scClass::all();
        return view('AdminPanel\deleteShowClass',compact('class'));
    }

    public function selectTeacher(Request $req)
    {
        //
        $user=Teacher::all();
        return view('AdminPanel\selectTeacherClass',compact('user'));
    }
    public function selectedTeacher($id)
    {
        return view('AdminPanel\insertClass',compact('id'));
    }

    public function allShow()
    {
        //
        $class=scClass::all();
        return view('AdminPanel\allClasses',compact('class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('AdminPanel\insertClass');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        

        $class=new scClass();
        $class->room_no=$request->room_no;
        $class->class_name=$request->class_name;
        $class->teacher_id=$id;
        $class->save();
        // $teacher=Teacher::find(1);
        // $teacher->scClass()->save($class);
        return redirect()->route('adminHome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showUpdate()
    {
        //
        $class=scClass::all();
        return view('AdminPanel\showClassupdate',compact('class'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class=scClass::find($id);
        return view('AdminPanel\editClass',compact('class'));

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
        $class=scClass::find($id);
        $class->room_no=$request->room_no;
        $class->class_name=$request->class_name;
        $class->save();

        return redirect()->route('updateClassshow');
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
        $del=scClass::find($id);
        $del->delete();
        return redirect()->back();
    }
}
