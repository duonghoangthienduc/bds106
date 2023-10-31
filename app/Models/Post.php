<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'id',
        'name_post',
        'slug',
        'short_des',
        'post_content',
        'thumb',
        'is_active',
        'post_cate_id',
    ];

    public function getPostCate()
    {
        return $this->belongsTo(PostCategory::class, 'post_cate_id', 'id');
    }

    public static function getTablePost()
    {
        return self::all();
    }

    public static function getContentPost($slug)
    {
        return self::where([['slug', $slug], ['is_active', 1]])->first();
    }

    public static function getAllPostByPostCategory($post_cate_id)
    {
        return self::where([['post_cate_id', $post_cate_id], ['is_active', 1]])->cursorPaginate(10);
    }

    public static function relatedPost($post_cate_id, $post_id)
    {
        return self::where([['post_cate_id', $post_cate_id], ['is_active', 1], ['id', '!=', $post_id]])->limit(3)->get();
    }
}
