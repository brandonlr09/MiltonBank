<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function new(Request $request)
    {
        $email = $request->email;
        $contact_id = app('App\Http\Controllers\UsersController')->getIdByEmail($email);

        $matchThese = ['user_id' => $request->id, 'contact_id' => $contact_id];
        if (app('App\Http\Controllers\UsersController')->searchByEmail($email) && !Contact::where($matchThese)->exists()) {
            $newContact = new Contact();
            $newContact->user_id = $request->id;
            $newContact->contact_id = $contact_id;
            $newContact->description = $request->description;
            $newContact->save();

            $newContact = new Contact();
            $newContact->user_id = $contact_id;
            $newContact->contact_id = $request->id;
            $newContact->description = $request->description;
            $newContact->save();
            return redirect('/dashboard')->with('success', 'New Contact Created');
        } else {
            return redirect('/contacts/create/')->with('error', 'Contact was not valid. Please enter new Contact');
        }
    }
}
