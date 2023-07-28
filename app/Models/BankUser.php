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
        self::$user->password           = $request->password;
        self::$user->remember_token     = $request->remember_token;
        self::$user->save();
    }
}
