<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;

    protected $table = 'post_category';

    protected $fillable = [
        'id',
        'post_cate_name',
        'slug',
    ];

    public static function getPostCategory() {
        return self::where('is_active', 1)->get();
    }

    public function getPost() {
        return $this->hasMany(Post::class, 'post_cate_id', 'id');
    }
}
