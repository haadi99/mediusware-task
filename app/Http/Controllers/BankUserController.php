<?php

namespace App\Http\Controllers;

use App\Models\BankUser;
use Illuminate\Http\Request;

class BankUserController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function create(Request $request){
        BankUser::createUser($request);
        return back()->with('message','User Created Successfully');
    }
}
