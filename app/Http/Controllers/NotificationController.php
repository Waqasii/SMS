<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delShow()
    {
        //
        $not=Notification::all();
        return view('AdminPanel\deleteShownoti',compact('not'));
    }

    public function allShow()
    {
        //
        $not=Notification::all();
        return view('AdminPanel\allNotification',compact('not'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('AdminPanel\postNotification');
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
        $news=new Notification();
        $news->creator='Admin';
        $news->title=$request->title;
        $news->description=$request->description;
        $news->end_date=$request->end_date;
        $news->save();
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
        $not=Notification::all();
        return view('AdminPanel\showNotificationupdate',compact('not'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $not=Notification::find($id);
        return view('AdminPanel\editNotification',compact('not'));

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
        $news=Notification::find($id);
        $news->creator='Admin';
        $news->title=$request->title;
        $news->description=$request->description;
        $news->end_date=$request->end_date;
        $news->save();

        return redirect()->route('updateNotshow');
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
        $del=Notification::find($id);
        $del->delete();
        return redirect()->back();
    }
}
