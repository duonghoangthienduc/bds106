<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'id',
        'thumb',
        'name_project',
        'slug',
        'price',
        'value',
        'unit',
        'content',
        'location',
        'convince',
        'decor',
        'payment',
        'place',
        'is_active',
    ];

    public static function getTableProject() {
        return self::all();
    }

    public static function getAll() {
        return self::where('is_active', 1)->orderBy('id','desc')->paginate(6);
    }

    public static function getProjectBySlug($slug) {
        return self::where('slug', $slug)->first();
    }
}
