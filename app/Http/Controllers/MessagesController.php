<?php

namespace App\Http\Controllers;

use App\Login;
use App\Messages;
use App\StudentTeacher;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;

class MessagesController extends Controller
{
    public function allMsg()
    {
        $tch_cnic=Login::all()->last()->cnic;
        $user=Messages::where('reciept_cnic', $tch_cnic)->get();
        return view('TeacherPanel\Message',compact('user'));
    }

    public function delShowMsg()
    {
        $tch_cnic=Login::all()->last()->cnic;
        $user=Messages::where('reciept_cnic', $tch_cnic)->get();
        return view('TeacherPanel\Message',compact('user'));
    }

    public function DeletedMsg($id)
    {
        Messages::where('id', $id)->delete();
        return redirect()->back();
    }

    public function showEnterMsg($id)
    {
        return view('TeacherPanel\EnterMessage',compact('id'));
        
    }
    public function Participants()
    {
        $tch_cnic=Login::all()->last()->cnic;
        $user=StudentTeacher::where('tch_cnic', $tch_cnic)->get();
        return view('TeacherPanel\Participants',compact('user'));
        
    }
    public function sendMessage(Request $req,$id)
    {
        $tch=Login::all()->last()->cnic;
        $std_cnic=$id;
        $msg=new Messages();
        $msg->sender_cnic=$tch;
        $msg->reciept_cnic=$id;
        $msg->message=$req->msg;
        $msg->save();
        return redirect()->back();

    }

    
    //
}
