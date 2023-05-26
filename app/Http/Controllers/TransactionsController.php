<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionsController extends Controller
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

    public function allUser()
    {
        //could have used show() but we wanted to originally set it up as an admin option
        $user = auth()->user();
        $id = $user->id;
        $transactions =  Transaction::where('client_id', $id)->orderBy('created_at', 'desc')->paginate(9);

        return view('transactions.all')->with('transactions', $transactions);
    }

    public static function balance($id)
    {
        $balance =  Transaction::where('client_id', $id)->sum('amount');
        return $balance;
    }

    public function deposit()
    {
        return view('transactions.deposit');
    }

    public function withdraw()
    {
        return view('transactions.withdraw');
    }

    public function commit(Request $request)
    {
        $newTransaction = new Transaction();
        $newTransaction->client_id = $request->id;
        $newTransaction->recipient_id = $request->id;
        if ($request->type == "deposit") {
            $newTransaction->amount = $request->amount;
            $newTransaction->description = "you deposited $" . $request->amount . " dollars";
            $newTransaction->save();
            return redirect('/dashboard/transactions')->with('success', 'Successful Deposit of ' . $request->amount . '!');
        } elseif ($request->type == "withdraw") {
            $newTransaction->amount = -1 * $request->amount;
            $newTransaction->description = "you withdrew $" . $request->amount . " dollars";
            $newTransaction->save();
            return redirect('/dashboard/transactions')->with('success', 'Successful Withdrawl of ' . $request->amount . '!');
            
        }
        return redirect('/dashboard')->with('error', 'Transaction Error. Please try again later.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        $contacts = Contact::where('user_id', $user->id)->get();

        return view('transactions.create')->with('contacts', $contacts);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //not being used ATM
        $newTransaction = new Transaction();
        $newTransaction->client_id = $request->id;
        $newTransaction->recipient_id = $request->recipient;
        $newTransaction->amount = $request->amount;
        $newTransaction->description = "money sent from user:" . $request->id . " to user: " . $request->recipient;
        $newTransaction->save();
        return redirect('/dashboard/transactions')->with('success', 'Transaction successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $newTransaction = new Transaction();
        $newTransaction->client_id = $request->id;
        $newTransaction->recipient_id = $request->recipient;
        $newTransaction->amount = -1 * $request->amount;
        $newTransaction->reversible = true;
        $newTransaction->description = "money sent from this account to user: " . $request->recipient;
        $newTransaction->save();

        $newTransaction = new Transaction();
        $newTransaction->client_id = $request->recipient;
        $newTransaction->recipient_id = $request->id;
        $newTransaction->amount = $request->amount;
        $newTransaction->reversible = false;
        $newTransaction->description = "money received from user:" . $request->id . " to this account";
        $newTransaction->save();
        return redirect('/dashboard/transactions')->with('success', 'Transaction successful!');
    }

    public function reverse($id)
    {
        $transaction =  Transaction::find($id);
        DB::table('transactions')
            ->where('id', $id)
            ->update(['reversible' => 0]);

        $newTransaction = new Transaction();
        $newTransaction->client_id = $transaction->recipient_id;
        $newTransaction->recipient_id = $transaction->client_id;
        $newTransaction->amount = $transaction->amount;
        $newTransaction->reversible = false;
        $newTransaction->description = "Transaction Reversal in amount of $" . $transaction->amount;
        $newTransaction->save();

        $newTransaction = new Transaction();
        $newTransaction->client_id = $transaction->client_id;
        $newTransaction->recipient_id = $transaction->recipient_id;
        $newTransaction->amount = abs($transaction->amount);
        $newTransaction->reversible = false;
        $newTransaction->description = "Transaction Reversal in amount of $" . abs($transaction->amount);
        $newTransaction->save();
        return redirect('/dashboard/transactions')->with('success', 'Transaction reversal successful!');
    }

    public function search(Request $request){
        $searchTerm = $request->search;
        $id = $request->id;

        //copied this from https://www.codegrepper.com/code-examples/php/search+keyword+in+laravel+query
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
        $searchTerm = str_replace($reservedSymbols, ' ', $searchTerm);

        $searchValues = preg_split('/\s+/', $searchTerm, -1, PREG_SPLIT_NO_EMPTY);

        $transactions = Transaction::where('client_id', '=', $id)
        ->where(function ($q) use ($searchValues) {
            foreach ($searchValues as $value) {
            $q->orWhere('description', 'like', "%{$value}%");
            $q->orWhere('amount', 'like', "%{$value}%");
            $q->orWhere('created_at', 'like', "%{$value}%");
            }})->orderBy('created_at', 'asc')->paginate(9);

        return view('transactions.all')->with('transactions', $transactions);
    }
}
