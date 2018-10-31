<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use Illuminate\Validation\Validator;

class SubscriberController extends Controller
{

    public function index()
    {
        return view('add-subscribers-form');

    }
    public function show($id)
    {
        $subscribers = Subscriber::where('id',$id)->get();
        return view('users-show',[
            'subscribers'=>$subscribers
        ]);

    }

    public function create (Request $request){
    $request->validate([
        'name'=>'required|max:255',
        'email'=>'required|max:255'
    ]);

    $subscribers = new Subscriber;
    $subscribers->name = $request->name;
    $subscribers->email = $request->email;
    $subscribers->save();
    return redirect('/'.$subscribers->id);
    //return dump($subscribers);
}

}
