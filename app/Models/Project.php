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

    public static function getTableProject()
    {
        return self::all();
    }

    public static function getAll()
    {
        return self::where('is_active', 1)->orderBy('id', 'asc')->paginate(6);
    }

    public static function getHomePageView()
    {
        return self::where('is_active', 1)->orderBy('id', 'asc')->limit(6)->get();
    }

    public static function getProjectBySlug($slug)
    {
        return self::where([['slug', $slug], ['is_active', 1]])->first();
    }

    public static function getProjectOrderByDate()
    {
        return self::where('is_active', 1)->orderBy('created_at', 'desc')->paginate(6);
    }

    public static function getProjectOrderByPrice($order = 'asc')
    {
        return self::where('is_active', 1)->orderBy('value', $order)->paginate(6);
    }
}
