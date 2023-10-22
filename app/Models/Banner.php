<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banner';

    protected $fillable = [
        'name_banner',
        'banner_content',
        'number_sort',
        'thumb',
        'is_active'
    ];

    public static function getAdminViewTable() {
        return static::paginate(5);
    }

    public static function getAll() {   
        return static::where('is_active', 1)->orderBy('number_sort','ASC')->get();
    }
}
