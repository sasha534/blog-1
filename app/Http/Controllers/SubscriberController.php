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
    /*
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
    */

    public function create (Request $request){
    $request->validate([
        'name'=>'required|max:255',
        'email'=>'required|max:255'
    ]);

    $subscribers = new Subscriber;
    $subscribers->name = $request->name;
    $subscribers->email = $request->email;
    $subscribers->save();
    return redirect('/'.$subscribers->id); //need ID
    //return dump($subscribers);
}

}
