@extends('master')
@section('body')

<div class="container">
    <div class="row py-5">
        <div class="col-md-8 mx-auto">
            <h4 class="text-center">All Deposit Transaction</h4>
            <div class="card">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date</th>
                    </tr>
                    </thead>
                    @foreach($deposits as $deposit)
                        @if($deposit->transaction_type=='deposit')
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$deposit->transaction_type}}</td>
                                <td>{{$deposit->amount}}</td>
                                <td>{{$deposit->date}}</td>
                            </tr>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
