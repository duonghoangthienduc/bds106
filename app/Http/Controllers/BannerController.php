<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Banner::getAdminViewTable();
        return view('admin.pages.banner.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.banner.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreImageRequest $request)
    {
        $request->validate([
            'name_banner' => 'required'
        ], [
            'name_banner.required' => 'Tên banner không được để trống',
        ]);
        $path = storeImage($request->file('thumb'), 'banner');
        $nameFile = str_replace("public/", "/storage/", $path);
        $data = Banner::create(array_merge($request->all(), ['thumb' => $nameFile]));
        if ($data) {
            return redirect()->route('banner.list')->with('success', 'Đăng tải ảnh thành công');
        }
        return back()->with('error', 'Đăng tải ảnh thất bại');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        $data = $banner;
        return view('admin.pages.banner.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        if ($request->file('thumb')) {
            $file = $request->input('img_category');
            $status = removeImage($file);
            if ($status) {
                $path = storeImage($request->file('thumb'), 'banner');
                $newFile = str_replace("public/", "/storage/", $path);
                $updateStatus = $banner->update([
                    'name_banner' => $request->input('name_banner'),
                    'number_sort' => (int) $request->input('number_sort'),
                    'banner_content' => $request->input('banner_content'),
                    'thumb' => $newFile,
                    'is_active' => $request->input('is_active')
                ]);
                if ($updateStatus) {
                    return redirect()->route('banner.list')->with('success', 'Cập nhật thành công');
                }
                return back()->with('error', 'Có lỗi xảy ra');
            }
            return back()->with('error', 'Có lỗi xảy ra');
        } else {
            $updateStatus = $banner->update([
                'name_banner' => $request->input('name_banner'),
                'number_sort' => (int) $request->input('number_sort'),
                'banner_content' => $request->input('banner_content'),
                'thumb' => $request->img_category,
                'is_active' => $request->input('is_active')
            ]);
            if ($updateStatus) {
                return redirect()->route('banner.list')->with('success', 'Cập nhật thành công');
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
            $data = Banner::where('id', $request->id)->first();
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
