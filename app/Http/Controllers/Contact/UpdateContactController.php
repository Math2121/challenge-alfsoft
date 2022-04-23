<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class UpdateContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        //
        $user = Contact::find($id);
        if(empty($user)){
            return redirect()->route('index')->with('message','User not Found');
        }

         return view('edit', ['user' => $user]);
    }
}
