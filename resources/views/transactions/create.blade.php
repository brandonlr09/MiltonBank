@extends('inc.sidebarDash')

@section('content-dash')
    @include('inc.balance')

    @if (count($contacts) > 0)
        <form action="{{ route('transactions/new') }}" method="post">
            @csrf
            <!-- {{ csrf_field() }} -->
            <input type="hidden" name="id" value="<?php $user = auth()->user();
echo $user->id; ?>">
            <label for="createTransaction" class="form-label p-2">Who are you sending money to?</label>

            <select class="form-select p-2" aria-label="Default select example" name="recipient">
                @foreach ($contacts as $contact)
                    <option value="{{ $contact->contact_id }}" required>@php echo App\Http\Controllers\UsersController::show($contact->contact_id);  @endphp</option>
                @endforeach
                </div>
            </select>

            <label for="createTransaction" class="form-label p-2 pt-5">How much are you sending</label>
            <div class="input-group mb-3 p-2">

                <span class="input-group-text">$</span>
                <input type="number" min="1" max="<?php $user = auth()->user();
echo App\Http\Controllers\TransactionsController::balance($user->id); ?>" class="form-control"
                    aria-label="Amount (to the nearest dollar)" name="amount">
                <span class="input-group-text">.00</span>
            </div>


            <div class="mb-3 form-check p-2 pt-5 d-flex justify-content-center">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">I understand that once the money is sent, it will be
                    deducted from my account. In fact you may lose real money. I also agree to all Milton Financials terms
                    and conditions</label>
            </div>
            <br><br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Send Money</button>
            </div>
        </form>
    @else
        <br><br><br>
        <h3 class="text-center p-5">You have no contacts. Click the <a href="/contacts/create/">Add New Contact</a> section
            to add one.</h3>
    @endif
@endsection
