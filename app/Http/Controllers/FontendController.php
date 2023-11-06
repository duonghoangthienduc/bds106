<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Project;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function getHomeView()
    {
        $banner = Banner::getAll();
        $projects = Project::getHomePageView();
        $post = Post::where([['post_cate_id', 1], ['is_active', 1]]);
        $getNews = $post->limit(3)->get();
        $listNews = $post->limit(8)->get();
        $recruitment = Post::where([['post_cate_id', 2], ['is_active', 1]])->limit(4)->get();
        return view('public.index', compact('banner', 'projects', 'getNews', 'listNews', 'recruitment'));
    }

    const TYPE_ORTHER = "linh-vuc-hoat-dong";
    const TYPE_NEWS = "tin-tuc";
    const TYPE_RECRUITMENT = "tuyen-dung";

    public function getPostWithCategory(Request $request)
    {
        $cateId = PostCategory::getPostCategoryBySlug($request->slug);

        if (!$cateId) {
            return redirect()->back();
        }

        $posts = Post::getAllPostByPostCategory($cateId->id);
        $tilte = "";
        
        if ($request->slug == FontendController::TYPE_ORTHER) {
            $tilte = 'Lĩnh vực hoạt động';
        }
        if ($request->slug == FontendController::TYPE_NEWS) {
            $tilte = 'Tin tức';
        }
        if ($request->slug == FontendController::TYPE_RECRUITMENT) {
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

    public function getProjectView()
    {
        $projects = Project::getAll();
        return view('public.pages.projects', compact('projects'));
    }

    public function projectDetail(Request $request) {
        $project = Project::getProjectBySlug($request->slug);

        if (!$project) {
            return redirect()->back();
        }

        return view('public.pages.detail-project', compact('project'));
    }

    const ORDER_BY = 'menu_order';
    const ORDER_DATE = 'date';
    const ORDER_LOW_PRICE = 'price';
    const ORDER_HIGH_PRICE = 'price-desc';

    public function projectOrderBy(Request $request) {
        $orderBy = $request->orderby;
        if (!$orderBy) {
            return redirect()->back();
        }
        if ($orderBy == FontendController::ORDER_BY) {
            $projects = Project::getAll();
            return view('public.pages.projects-orderBy', compact('projects', 'orderBy'));
        }
        if ($orderBy == FontendController::ORDER_DATE) {
            $projects = Project::getProjectOrderByDate();
            return view('public.pages.projects-orderBy', compact('projects', 'orderBy'));
        }
        if ($orderBy == FontendController::ORDER_LOW_PRICE) {
            $projects = Project::getProjectOrderByPrice();
            return view('public.pages.projects-orderBy', compact('projects', 'orderBy'));
        }
        if ($orderBy == FontendController::ORDER_HIGH_PRICE) {
            $projects = Project::getProjectOrderByPrice('desc');
            return view('public.pages.projects-orderBy', compact('projects', 'orderBy'));
        }
    }
}
