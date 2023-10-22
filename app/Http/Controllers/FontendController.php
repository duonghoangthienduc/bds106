<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function getHomeView() {
        $banner = Banner::getAll();
        return view('public.index', ['banner' => $banner]);
    }    
}
