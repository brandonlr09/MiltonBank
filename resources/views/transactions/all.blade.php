@extends('inc.sidebarDash')

@section('content-dash')
    @include('inc.balance')
    <h3 class="p-5">Transactions</h3>
    <table class="table table-dark table-striped">
        @if (count($transactions) > 0)
            <thead class="thead">
                <tr>
                    <th>Transaction ID</th>
                    <th>To/Recipient</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>status</th>
                </tr>
            </thead>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->recipient_id }}</td>
                    <td>{{ $transaction->description }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>@php
                        $created = $transaction->created_at;
                        $expire = date('Y-m-d H:i:s', strtotime('+2 hours', strtotime($created)));
                        
                        $now = date('Y-m-d H:i:s');
                        
                        if ($expire > $now && $transaction->reversible == 1 && $transaction->amount < 0) {
                            echo "<a class='text-warning'href='/transaction/reverse/" . $transaction->id . "'>Reversable</a>";
                        } else {
                            echo "<p class='text-success'>finalized</p>";
                        }
                        
                    @endphp</td>
                </tr>
            @endforeach
    </table>
    <div class="d-flex justify-content-center p-3">{{ $transactions->links() }}</div>
@else
    <p>No transactions to show.</p>
    @endif
@endsection
