@extends('master')
@section('body')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('dashboard')}}">User</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="" onclick="event.preventDefault(); document.getElementById('userLogoutForm').submit();">Logout</a>
                    <form action="{{route('user-logout')}}" id="userLogoutForm" method="POST">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-8 mx-auto">
                <div class="card p-5">
                    <h4>User Dashboard</h4>
                    <h4 class="text-center">Balance: ${{$bankUser->balance}}</h4>
                    <a href="{{route('transaction')}}" class="btn btn-outline-success   ">Make Transaction</a>
                    <a href="{{route('all-transaction')}}" class="btn btn-info mt-3">All Transaction</a>
                    <a href="{{route('deposit.transaction',['id'=>$bankUser->id])}}" class="btn btn-success mt-3">See all deposit transaction</a>
                    <a href="{{route('withdraw.transaction',['id'=>$bankUser->id])}}" class="btn btn-warning mt-3">See all withdraw transaction</a>
                </div>
            </div>
        </div>
    </div>

@endsection


