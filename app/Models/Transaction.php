<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public static $transaction;

    public static function transaction($request){
        self::$transaction = new Transaction();
        self::$transaction->user_id = $request->user_id;
        self::$transaction->transaction_type = $request->transaction_type;
        self::$transaction->amount = $request->amount;
        self::$transaction->fee = $request->fee;
        self::$transaction->date = $request->date;
        self::$transaction->save();

    }



//    public function bankUser(){
//        return $this->belongsTo(BankUser::class);
//    }
}
