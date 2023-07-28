@extends('master')
@section('body')
    <div class="container">
        <div class="row py-5">
            <div class="col-md-8 mx-auto">
                <div class="card p-5">
                    <h4 class="text-center">Login</h4>

                    <span class="text-success">{{session('message')}}</span>
                    <form action="{{route('user.login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" placeholder="Email" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

