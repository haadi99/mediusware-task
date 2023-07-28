@extends('master')
@section('body')
    <div class="container">
        <div class="row py-5">
            <div class="col-md-8 mx-auto">
                <a href="{{route('user-dashboard')}}" class="btn btn-sm">Dashboard</a>
                <div class="card p-5">
                    <h4 class="text-center">Transaction</h4>

                    <span class="text-success">{{session('message')}}</span>
                    <form action="{{route('transaction')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">User Id</label>
                            <input type="text" name="user_id" placeholder="User Id" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Transaction Type</label>
                            <select class="form-control" name="transaction_type">
                                <option value="deposit">Deposit</option>
                                <option value="withdraw">Withdraw</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <input type="number" name="amount" placeholder="Amount" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fee</label>

                            <input type="number" name="fee" value="{{$user->account_type == 'business'? 0.025 : 0.015 }}"  placeholder="Fee" class="form-control">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">date</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Transact</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
