<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;



class MessageController extends Controller
{


    public function insert(Request $request)
    {

        // for validation

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);


        $message = new Message();

        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');



        // for save

        $message->save();


        // redirect

        return redirect('/')->with('success', 'data successfully submitted');





    }

}
