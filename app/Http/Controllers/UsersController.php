<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
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
        //
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
        $contact = User::where('id', $id)->get();
        $contact_name = $contact[0]->name;
        return $contact_name;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = auth()->user();
        $id = $user->id;
        $user = User::find($id);
        
        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {        
        $user = auth()->user();
        $id = $user->id;

        $userInfo = User::find($id);
        $userInfo->name = $request->name;
        $userInfo->email = $request->email;
        $userInfo->update();
        return redirect('/dashboard/')->with('success','User Info has been successfully updated');
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

    public function searchByEmail($email)
    {

        if (User::where('email', $email)->exists()) {
            return true;
        }
        return false;
    }

    public function getIdByEmail($email)
    {
        if (User::where('email', $email)->count() > 0) {
            $user = User::where('email', $email)->get();
            $user_id = $user[0]->id;
            return $user_id;
        } else {
            return -1;
        }
    }
}
