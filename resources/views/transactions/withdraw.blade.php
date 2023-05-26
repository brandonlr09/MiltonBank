@extends('inc.sidebarDash')

@section('content-dash')
    @include('inc.balance')

    <form action="{{ route('/commit') }}" method="post">
        @csrf
        <!-- {{ csrf_field() }} -->
        <input type="hidden" name="id" value="<?php $user = auth()->user();
echo $user->id; ?>">
        <input type="hidden" name="type" value="withdraw">
        <label for="createWithdraw" class="form-label p-2 pt-5">How much would you like to withdraw?</label>

        <div class="input-group mb-3 p-2">
            <span class="input-group-text">$</span>
            <input type="number" min="1" max="<?php $user = auth()->user();
echo App\Http\Controllers\TransactionsController::balance($user->id); ?>" class="form-control"
                aria-label="Amount (to the nearest dollar)" name="amount">
            <span class="input-group-text">.00</span>
        </div>

        <div class="mb-3 form-check p-2 pt-5 d-flex justify-content-center">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">By clicking the Withdraw Funds button, The withdrawn amount
                will nolonger be available for use and I agree to all Milton Financials terms and conditions</label>
        </div>
        <br><br>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Withdraw Funds</button>
        </div>
    </form>
@endsection
