@extends('inc.sidebarDash')
{{-- This is broken --}}
@section('content-dash')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">{{ __('Update Info') }}</div>

                <div class="card-body">
                    <form action="{{ route('dashboard/update') }}" method="post">
                        @csrf
                        <!-- {{ csrf_field() }} -->
                        <div class="form-group p-2 pt-5 m-4">
                            <label for="updateInfo">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                        </div>

                        <div class="form-group p-2 pt-5 m-4">
                          <label for="updateInfo">Email address</label>
                          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{ $user->email }}">
                          <small id="email" class="form-text text-muted">This email address may be used for spam in the future. JUST SAYING...</small>
                        </div>

                        <div class="mb-3 form-check p-2 pt-5 d-flex justify-content-center">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">I legally agree that this information is accurate and true. I also agree to all Milton Financials terms
                                and conditions</label>
                        </div>
                        <br><br>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Update My Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection