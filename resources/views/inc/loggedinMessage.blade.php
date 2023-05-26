<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="text-center">
                    {{ __('You are logged in!') }}
                    <?php $user = auth()->user();
                    echo "\n\nWelcome back " . $user->name; ?>
                </div>


                {{-- </div> --}}
            </div>
        </div>
    </div>
