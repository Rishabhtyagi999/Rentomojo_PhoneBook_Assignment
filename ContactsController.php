<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactsController extends Controller
{
   
    /**
     * Create a new controller instance.
     * Only Owner can view this controller
     *
     */
    public function __construct() {
        $this->middleware('auth');
    }    

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user_id = \Auth::user()->id;
        $contacts = Contact::Where('user_id', $user_id)->get();
        return view('contacts.list')->with('contacts', $contacts);
    }

     /**
     * Add contact.
     * view/contacts/add
     *
     * @return Response
     */
    public function add() {
        return view('contacts.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
     
         // Validate
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|min:10|numeric',
            'notes' => 'max:255'
        ]);
        $data=array_merge($request->all(),array("user_id"=>\Auth::user()->id));
        Contact::create($data); // Save
        return redirect("contacts")->with('flash_message', 'Contact has been created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
         $contact = Contact::findOrFail($id);
        return view('contacts.edit')->with('contact', $contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
          // Validate
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|min:10|numeric',
            'notes' => 'max:255'
        ]);

        $contact = Contact::findOrFail($id); // Get Data by id
        $contact->update($request->all()); // update data
        return redirect("contacts")->with('flash_message', 'Contact has been updated successfully.'); // Redirect
    }

     /**
     * Delete contact.
     *
     * @param $id
     * @param  Request $request
     * @return Response
     */
    public function delete($id, Request $request)
    {
        // Find contact by id
        // delete record
        // then redirect to listing page
        $contact = Contact::find($id);
        $contact->delete();
        return redirect("contacts")->with('flash_message', 'Contact has been deleted successfully.');
    }
}
