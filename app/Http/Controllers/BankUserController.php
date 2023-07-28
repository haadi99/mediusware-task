<?php

namespace App\Http\Controllers;

use App\Models\BankUser;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Session;

class BankUserController extends Controller
{

    public $user;
    public function index(){
        return view('user.index');
    }
    public function create(Request $request){
        BankUser::createUser($request);
        return back()->with('message','User Created Successfully');
    }

    public function loginShow(){
        return view('user.login');
    }

    public function userLogin(Request $request){
        $this->user = BankUser::where('email', $request->email)->first();

        if ($this->user)
        {
            if (password_verify($request->password, $this->user->password))
            {
                Session::put('user_id', $this->user->id);
                Session::put('user_name', $this->user->name);

                return redirect('/user-dashboard');
            }

            else
            {
                return back()->with('message', 'Sorry......password is invalid.');
            }
        }

        else
        {
            return back()->with('message', 'Sorry......email address is invalid.');
        }

    }


    public function dashboard(){
        return view('user.dashboard',['bankUser'=>BankUser::find(Session::get("user_id"))]);
    }


    public function depositView(){
        return view('user.deposit');
    }
    public function deposit(Request $request){
        return view('user.deposit');
    }

    public function allTransaction(){
        return view('user.all-transaction',['transactions'=>Transaction::all()]);
    }



    public function transactionShow(){
        return view('user.transaction',['user'=>BankUser::find(Session::get("user_id"))]);
    }
    public function transaction(Request $request){
        $this->user = BankUser::find($request->user_id);
        BankUser::updateUser($request->user_id, $request);
        Transaction::transaction($request);
        return redirect('/user-dashboard');
    }


    public function depositTransaction($id){
        $this->transaction = Transaction::where('user_id',$id)->get();
        return view('user.deposit',['deposits'=>$this->transaction]);

    }
    public function withdrawTransaction($id){
        $this->transaction = Transaction::where('user_id',$id)->get();
        return view('user.withdraw',['withdraws'=>$this->transaction]);

    }
}
