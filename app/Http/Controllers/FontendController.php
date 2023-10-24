<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function getHomeView()
    {
        $banner = Banner::getAll();
        return view('public.index', ['banner' => $banner]);
    }

    public function getPostWithCategory(Request $request)
    {
        $cateId = PostCategory::getPostCategoryBySlug($request->slug);
        $posts = Post::getAllPostByPostCategory($cateId->id);
        switch ($request->slug) {
            case 'khac':
                $tilte = 'Lĩnh vực hoạt động';
                return view('public.pages.blog', compact('posts', 'tilte'));
                break;
            case 'tin-tuc':
                $tilte = 'Tin tức';
                return view('public.pages.blog', compact('posts', 'tilte'));
                break;
            case 'tuyen-dung':
                $tilte = 'Tuyển dụng';
                return view('public.pages.blog', compact('posts', 'tilte'));
                break;
        }
    }

    public function getPostView(Request $request) {
        $post = Post::getContentPost($request->slug);
        $relatedPosts = Post::relatedPost($post->post_cate_id, $post->id);
        return view('public.pages.detail-blog', compact('post', 'relatedPosts'));
    }
}
