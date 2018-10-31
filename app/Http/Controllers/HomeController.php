<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscriber::get();
        return view('home',[
            'subscribers'=>$subscribers
        ]);
    }


    public function show($id)
    {
        //echo __METHOD__;
        $subscribers = Subscriber::where('id',$id)->get();
        return view('users-show',[
            'subscribers'=>$subscribers
        ]);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=> 'required'
        ]);

        $subscribers = Subscriber::find($id);
        $subscribers->name = $request->get('name');
        $subscribers->phone = $request->get('email');

        $subscribers->save();

        return redirect('/api/users/')->with('Success', 'Subscriber has been updated');
    }

    public function destroy($id)
    {
        $subscribers = Subscriber::where('id',$id)->delete();
        return redirect('/home')->with('Success', 'Subscriber has been DELETED');
    }
}
