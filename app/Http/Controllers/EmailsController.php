<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class EmailsController extends Controller
{
    public function create(Request $request)
    {
        $email = $request->email;
        if (!Email::where('email', $email)->exists()) {
            $newEmail = new Email();
            $newEmail->email = $email;
            $newEmail->save();
            return redirect('/')->with('success', 'Congratulations! You have signed up for our newsletter');
        }
        return redirect('/');
    }
}
