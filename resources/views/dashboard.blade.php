@extends('master')
@section('body')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('dashboard')}}">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a>
                    <form action="{{route('logout')}}" id="logoutForm" method="POST">
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
                    <h4 class="text-center">Add User</h4>

                    <span class="text-success">{{session('message')}}</span>
                    <form action="{{route('create.user')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" placeholder="Name" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Account Type</label>
                            <select class="form-control" name="account_type">
                                <option value="business">Business</option>
                                <option value="individual">individual</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Balance</label>
                            <input type="number" name="balance" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Remember Token</label>
                            <input type="text" name="remember_token" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Create User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
