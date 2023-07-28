@extends('master')
@section('body')
<div class="container">
    <div class="row py-5">
        <div class="col-md-8 mx-auto">
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
                    @foreach($withdraws as $withdraw)
                        @if($withdraw->transaction_type=='withdraw')
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$withdraw->transaction_type}}</td>
                                <td>{{$withdraw->amount}}</td>
                                <td>{{$withdraw->date}}</td>
                            </tr>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
