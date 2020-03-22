<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        return view('LoginPage.index');
        //
    }

    public function subInsert()
    {
        //
        return view('AdminPanel.insertSubject');
    }
    public function tchRegister(Request $request)
    {
        //subject
            $addSubject=new Subject();

            $addSubject->course_code=$request->course_code;
            $addSubject->name=$request->course_name;
           

            $addSubject->save();

            return redirect()->route('adminHome');

    }


    public function showAll()
    {

        $sub=Subject::all();
        return view('AdminPanel.allSubject',compact('sub'));
        //
    }


    
    public function showUpdate()
    {
        //
        $sub=Subject::all();
        return view('AdminPanel.updateSubject',compact('sub'));
    }
    public function edit($id)
    {
        //
        // return 'here it is';
        return view('AdminPanel.editSubject',compact('id'));
    }
    public function update(Request $request,$id)
    { 
        
        
          Subject::where('id',  $id)->update([
                'course_code' => $request->course_code,
                'name' => $request->course_name
                ]);


        

                return redirect()->route('adminHome');


    }


    public function showDelete()
    {
        //
        $sub=Subject::all();
        return view('AdminPanel.deleteSubject',compact('sub'));
    }

    
    public function destroy($id)
    {
        
        $data=new Subject();
        //
        // $data=Admin::find($request->cnic);
        Subject::where('id', $id)->delete();;
        
        return redirect()->back();      // Reload previous page
    }
}
