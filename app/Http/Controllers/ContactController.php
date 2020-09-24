<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller {

    public function submit(ContactRequest $request) {
        //dd($request);
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->subject = $request->input('subject');
        $contact->email = $request->input('email');
        $contact->textarea = $request->input('textarea');        
        $contact->save();// save form to table contacts
        return redirect('/feedback');
    }

}
