<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Cache;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::getSetting();
        return view("admin.pages.setting.index", compact("settings"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Setting::getSettingByName($request->type)) {
            $status = Setting::create($request->all());
            if ($status) {
                Cache::rememberForever('CONFIG', function() { 
                    return Setting::getConfigValue('config');
                });
                return redirect()->route("admin.dashboard")->with("success","Cập nhật config thành công");
            }
        } else {
            if($this->update($request->all())) {
                if (Cache::has("CONFIG")) {
                    Cache::forget("CONFIG");
                }
                Cache::rememberForever('CONFIG', function() { 
                    return Setting::getConfigValue('config');
                });
                return redirect()->route("admin.dashboard")->with("success","Cập nhật config thành công");
            }
        }
        return redirect()->back()->with("error","Có lỗi xảy ra vui lòng thử lại");
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request)
    {
        $setting = Setting::getConfig([$request['type']]);
        return $setting->update(['value' => $request['value']]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
