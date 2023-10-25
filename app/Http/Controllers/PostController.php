<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::getTablePost();
        return view("admin.pages.post.list", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $postCate = PostCategory::getPostCategory();
        return view("admin.pages.post.add", compact("postCate"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $path = storeImage($request->file('thumb'));
        $nameFile = str_replace("public/", "/storage/", $path);
        $post = [
            'name_post' => $request->name_post,
            'slug' => str()->of($request->name_post)->slug('-'),
            'short_des' => htmlspecialchars($request->short_des),
            'post_content' => htmlspecialchars($request->post_content),
            'thumb' => $nameFile,
            'is_active' => $request->is_active,
            'post_cate_id' => $request->post_cate_id,
        ];

        $status = Post::create($post);

        if ($status) {
            return redirect()->route('post.list')->with('success', 'Đăng bài viết thành công');
        }
        return back()->with('error', 'Có lỗi xảy ra');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $data = $post;
        $postCate = PostCategory::getPostCategory();
        return view('admin.pages.post.edit', compact('data', 'postCate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if ($request->file('thumb')) {
            $file = $request->input('img_category');
            $status = removeImage($file);
            if ($status) {
                $path = storeImage($request->file('thumb'));
                $newFile = str_replace("public/", "/storage/", $path);
                $updateStatus = $post->update([
                    'name_post' => $request->name_post,
                    'slug' => str()->of($request->name_post)->slug('-'),
                    'short_des' => htmlspecialchars($request->short_des),
                    'post_content' => htmlspecialchars($request->post_content),
                    'thumb' => $newFile,
                    'is_active' => $request->is_active,
                    'post_cate_id' => $request->post_cate_id,
                ]);
                if ($updateStatus) {
                    return redirect()->route('post.list')->with('success', 'Cập nhật thành công');
                }
                return back()->with('error', 'Có lỗi xảy ra');
            }
        } else {
            $updateStatus = $post->update([
                'name_post' => $request->name_post,
                'slug' => str()->of($request->name_post)->slug('-'),
                'short_des' => htmlspecialchars($request->short_des),
                'post_content' => htmlspecialchars($request->post_content),
                'thumb' => $request->img_category,
                'is_active' => $request->is_active,
                'post_cate_id' => $request->post_cate_id,
            ]);
            if ($updateStatus) {
                return redirect()->route('post.list')->with('success', 'Cập nhật thành công');
            }
            return back()->with('error', 'Có lỗi xảy ra');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $data = Post::where('id', $request->id)->first();
            if (!$data) {
                return response()->json(['err' => true, 'msg'=> 'Có lỗi xảy ra']);
            }
            $file = $data->thumb;
            $status = removeImage($file);
            if ($status) {
                $removeStatus = $data->delete();
                if ($removeStatus) {
                    return response()->json(['err' => false, 'msg'=> 'Xoá thành công']);
                }
            }
            return response()->json(['err' => true, 'msg'=> 'Có lỗi xảy ra']);
        }
    }
}
