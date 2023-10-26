<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function storeCustomer() {
        return response()->json(['error' => false, 'msg' => 'Lưu thành công']);
    }
}
