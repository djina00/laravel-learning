<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
        return view('contact');
    }

    function contactSubmit(ContactStoreRequest $request){
        //Request $request - *dependecy injection* in $request we have all data from request
        //echo $request->name;
        //dd($request->all());
        //Validation

            //in second array we write custom message
            // $request->validate(
            //     [
                //'name' => 'required|max:20|min:2',
                //OR anatoher sintax ----->
            //     'name' => ['required', 'max:20', 'min:2'],
            //     'email' => 'required|email'
            //     ],
            //     [
            //         'name.required' => 'Hey please fill the name field',
            //         'name.max' => 'The max length of name have tob be 20',
            //         'name.min' => 'The min length of name have to be 2',
            //         'email.required' => 'Hey email is required'
            //     ]
            // );
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            $contact->save();
        
    }
}
