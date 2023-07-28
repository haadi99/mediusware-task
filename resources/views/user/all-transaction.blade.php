@extends('master')
@section('body')

    <div class="container">
        <div class="row py-5">
            <div class="col-md-8 mx-auto">
                <h4 class="text-center">All Transaction</h4>
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
                        @foreach($transactions as $transaction)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$transaction->transaction_type}}</td>
                                    <td>{{$transaction->amount}}</td>
                                    <td>{{$transaction->date}}</td>
                                </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
