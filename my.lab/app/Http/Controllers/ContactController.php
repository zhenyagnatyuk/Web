<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller{
	public function submit(ContactRequest $request){
		
		$contact = new Contact();
		$contact->name = $request->input('name');
		$contact->surname = $request->input('surname');
		$contact->email = $request->input('email');
		$contact->message = $request->input('message');
		$contact->save();
		return redirect()->route('home')->with('success', 'Повідомлення додане');
	}
	public function allDate(){
		return view('messages', ['data' => Contact::all()]);
	}
	public function get_messages_by_email($email){
        $contact = new Contact();
        return view('messages', ['data' => $contact->where('email', '=', $email)->get()]);
    }
}
