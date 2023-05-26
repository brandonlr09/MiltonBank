<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Good decisions make for great outcomes';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title); //this method is what might be better
    }

    public function about()
    {
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => [
                'Personal Banking', 'Savings Accounts', 'Chequing Accounts', 'Home Insurance', 'RRSP Investing',
                'e-transfer', 'Stock Market Brokering'
            ],
            'calltag' => 'Contact us today for any of your financial questions. Our lines are open 24/7 365 days a year',
            'callnum' => ' 1-800-1-M-I-L-T-O-N. (1-800-164-5866).'
        );
        return view('pages.services')->with($data);
    }
}
