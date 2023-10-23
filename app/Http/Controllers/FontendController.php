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
        $posts = PostCategory::where('slug', $request->slug)->first();
        $posts = $posts->getPost;
        switch ($request->slug) {
            case 'khac':
                return view('public.pages.field-of-activity', compact('posts'));
                break;
            case 'tin-tuc':
                return view('public.pages.news', compact('posts'));
                break;
            case 'tuyen-dung':
                return view('public.pages.recruitment', compact('posts'));
                break;
        }
    }

    public function getPostView(Request $request) {
        $post = Post::getContentPost($request->slug);
        return view('public.pages.detail-post-view', compact('post'));
    }
}
