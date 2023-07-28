<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankUser extends Model
{
    public static $user;
    use HasFactory;

    public static function createUser($request){
        self::$user = new BankUser();
        self::$user->name               = $request->name;
        self::$user->account_type       = $request->account_type;
        self::$user->balance            = $request->balance;
        self::$user->email              = $request->email;
        self::$user->password           = bcrypt($request->password);
        self::$user->remember_token     = $request->remember_token;
        self::$user->save();
    }


    public static function updateUser($id, $request){
        self::$user = BankUser::find($id);
        if ($request->transaction_type == 'deposit'){
            self::$user->balance = self::$user->balance + $request->amount;
        }
        elseif ($request->transaction_type == 'withdraw'){
            self::$user->balance = self::$user->balance - $request->amount;
        }
        self::$user->save();
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
