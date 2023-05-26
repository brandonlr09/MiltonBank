<h5>Current Balance: $<b>@php
    $user = auth()->user();
    echo App\Http\Controllers\TransactionsController::balance($user->id);
@endphp </b></h5>
