@extends('master')
@section('body')
    <div class="container">
        <div class="row py-5">
            <div class="col-md-8 mx-auto">
                <div class="card p-5">
                    <h4>User Dashboard</h4>
                    <h4 class="text-center">Balance:{{$bankUser->balance}}</h4>
                    <a href="{{route('transaction')}}" class="btn btn-info">Transaction</a>
                    <a href="{{route('deposit.transaction',['id'=>$bankUser->id])}}" class="btn btn-success mt-3">See all deposit transaction</a>
                    <a href="{{route('withdraw.transaction',['id'=>$bankUser->id])}}" class="btn btn-warning mt-3">See all deposit transaction</a>
                </div>
            </div>
        </div>
    </div>

@endsection


