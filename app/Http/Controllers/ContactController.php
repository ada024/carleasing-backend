<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    public function AdminContact()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function AdminAddContact()
    {
        return view('admin.contact.create');
    }

    public function AdminStoreContact(Request $request)
    {
        // Insert to DB (Left-side db-fields, right-side name=".." from form )
        Contact::insert([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => Carbon::now(),
        ]);
        return Redirect()->route('admin.contact')->with('success', 'Contact inserted Successfully!');
    }

    public function Contact()
    {
        $contacts = DB::table('contacts')->first(); // First only takes the first row in DB
        return view('pages.contact', compact('contacts'));
    }

    public function ContactForm(Request $request)
    {
        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        return Redirect()->route('contact')->with('success', 'ContactForm inserted Successfully!');
    }

    public function AdminMessage()
    {
        $messages = ContactForm::all();
        return view('admin.contact.message', compact('messages'));
    }


}//
