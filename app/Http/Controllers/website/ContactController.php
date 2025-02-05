<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('website.contact.contact');
    }

    public function postmessage(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required'],
            'subject' => ['required'],
            'message' => ['required']
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        return back()->with(['success' => 'Your request has been submitted']);
    }

    public function quote(Request $request){
        $this->validate($request, [
            'email' => ['required']
        ]);
        Contact::create([
            'name' => 'null',
            'email' => $request->email,
            'subject' => 'this is the quote request',
            'message' => 'null'
        ]);
        return back()->with(['success' => 'Your request has been submitted']);
    }

    public function posturl(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required'],
            'url' => ['required']
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->url,
            'message' => 'null',
        ]);
        return back()->with(['success' => 'Your request has been submitted']);
    }
}
