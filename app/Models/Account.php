<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Account extends Model
{
    protected $fillable = [

        /*$table->bigInteger('acc_no');
            $table->string('acc_type');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->bigInteger('balance');
            $table->string('password'); */
        'acc_no', 'acc_type', 'name', 'email', 'address', 'phone', 'balance', 'password',
    ];

    use HasFactory;
}
