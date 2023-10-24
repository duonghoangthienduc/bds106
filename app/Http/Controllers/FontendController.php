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

        if (!$cateId) {
            return redirect()->back();
        }

        $posts = Post::getAllPostByPostCategory($cateId->id);
        $tilte = "";
        if ($request->slug == "khac") {
            $tilte = 'Lĩnh vực hoạt động';
        }
        if ($request->slug == "tin-tuc") {
            $tilte = 'Tin tức';
        }
        if ($request->slug == "tuyen-dung") {
            $tilte = 'Tuyển dụng';
        }
        return view('public.pages.blog', compact('posts', 'tilte'));
    }

    public function getPostView(Request $request)
    {
        $post = Post::getContentPost($request->slug);

        if (!$post) {
            return redirect()->back();
        }

        $relatedPosts = Post::relatedPost($post->post_cate_id, $post->id);
        return view('public.pages.detail-blog', compact('post', 'relatedPosts'));
    }
}
