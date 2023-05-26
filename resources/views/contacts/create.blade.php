@extends('inc.sidebarDash')

@section('content-dash')
    @include('inc.balance')
    <form action="{{ route('contacts/new') }}" method="post">
        @csrf
        <!-- {{ csrf_field() }} -->
        <input type="hidden" name="id" value="<?php $user = auth()->user();
echo $user->id; ?>">

        <div class="mb-3 p-2">
            <label for="createContact" class="form-label">Contact Email Address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                placeholder="name@example.com">
        </div>

        <div class="mb-3 p-2">
            <select class="form-select" aria-label="Default select example" name="description">
                <option selected value="family" required>Family</option>
                <option value="friend" required>Friend</option>
                <option value="business" required>Business</option>
                <option value="other" required>Other</option>
            </select>
        </div>

        <div class="mb-3 form-check p-2 pt-5 d-flex justify-content-center">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">I understand that by checking this button, I take full legal
                responsability for any money I send or receive. I also agree to all Milton Financials terms and
                conditions</label>
        </div>

        <br><br>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Add Contact</button>
        </div>
    </form>
@endsection
