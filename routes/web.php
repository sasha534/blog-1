<?php

use Illuminate\Http\Request;
use App\Subscriber;

    Route::get('/','SubscriberController@index');

    Route::delete('/users/{id}','SubscriberController@destroy');

    Route::get('users/search/{name}','SubscriberController@search');

    Route::get('users/{id}', 'SubscriberController@show');

    Route::post('users/{id}', 'SubscriberController@update')->name('users.update');
    /*
    Route::put('api/users/{id}', function (Request $request, $id){

        $phone_book_user = new PhoneBookModel;
        $phone_book_user->name = 'xxxx';
        $phone_book_user->phone = '1234567890';
        $phone_book_user->save();
        return redirect('/api/users/');
    });
    */
    Route::post('/',function (Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:255',
            'email'=>'required|max:255'
        ]);
        if($validator->fails()){
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        $subscribers = new Subscriber;
        $subscribers->name = $request->name;
        $subscribers->email = $request->email;
        $subscribers->save();
        return redirect('/');
    });

//Route::resource('api/users','PhoneBookController');
