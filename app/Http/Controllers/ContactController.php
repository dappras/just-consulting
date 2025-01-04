<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.contactpage');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'company' => 'required|string',
            'subjectDiscuss' => 'required|string',
            'message' => 'required|string',
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $message = "Applicant add Failed";
        $this->validator($data)->validate();
        // dd($data);
        $contact = Contact::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'phone_number' => $data['phone'],
            'company' => $data['company'],
            'subject' => $data['subjectDiscuss'],
            'message' => $data['message'],
        ]);

        // dd($job);
        if ($contact->id) {
            $message = "Contact add success";
        }

        return redirect()->back()->with(['message' => $message]);
    }
}
