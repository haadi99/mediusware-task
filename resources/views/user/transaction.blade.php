@extends('master')
@section('body')
    <div class="container">
        <div class="row py-5">
            <div class="col-md-8 mx-auto">
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
                            <input type="text" name="transaction_type" placeholder="please type deposit or withdraw" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <input type="number" name="amount" placeholder="Amount" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fee</label>
                            <input type="number" name="fee" placeholder="Fees" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">date</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Create User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
