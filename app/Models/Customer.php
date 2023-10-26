<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customers";

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'note',
    ];

    public static function getTableCustomer()
    {
        return self::all();
    }
}
