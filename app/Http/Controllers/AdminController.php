<?php

namespace App\Http\Controllers;

use App\Models\BankUser;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $user;

    public function index(){
        return view('dashboard');
    }




}
