<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = "members";

    protected $fillable = [
        'id',
        'name',
        'age',
        'is_male',
        'place',
        'clb_name',
        'curent_point',
        'change_point',
        'is_guest',
        'ability',
        'phone',
        'email',
        'nickname',
    ] ;

    public static function getTableMember() {
        return self::orderBy('curent_point', 'desc')->get();
    }
}
