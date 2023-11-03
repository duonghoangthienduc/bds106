<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::getTableMember();
        return view("admin.pages.member.list", compact("members"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.pages.member.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        $member = [
            'name' => $request->name,
            'age' => $request->age,
            'is_male' => $request->is_male,
            'place' => $request->place,
            'clb_name' => $request->clb_name,
            'curent_point' => $request->curent_point,
            'change_point' => $request->change_point,
            'is_guest' => $request->is_guest,
            'ability' => $request->ability ?? htmlspecialchars($request->ability),
            'phone' => $request->phone,
            'email' => $request->email,
            'nickname' => $request->nickname,
        ];
        $status = Member::create($member);
        if ($status) {
            return redirect()->route('member.list')->with("success", "Thêm thành viên mới thành công");
        }
        return redirect()->back()->with("error", "Có lỗi xảy ra, vui lòng thử lại sau");
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        $data = $member;
        return view('admin.pages.member.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMemberRequest $request, Member $member)
    {
        $data = [
            'name' => $request->name,
            'age' => $request->age,
            'is_male' => $request->is_male,
            'place' => $request->place,
            'clb_name' => $request->clb_name,
            'curent_point' => $request->curent_point,
            'change_point' => $request->change_point,
            'is_guest' => $request->is_guest,
            'ability' => $request->ability ?? htmlspecialchars($request->ability),
            'phone' => $request->phone,
            'email' => $request->email,
            'nickname' => $request->nickname,
        ];
        $status = $member->update($data);
        if ($status) {
            return redirect()->route('member.list')->with("success", "Cập nhật thành viên mới thành công");
        }
        return redirect()->back()->with("error", "Có lỗi xảy ra, vui lòng thử lại sau");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $data = Member::where('id', $request->id)->first();
            if (!$data) {
                return response()->json(['err' => true, 'msg' => 'Có lỗi xảy ra']);
            }
            $removeStatus = $data->delete();
            if ($removeStatus) {
                return response()->json(['err' => false, 'msg' => 'Xoá thành công']);
            }
        }
        return response()->json(['err' => true, 'msg' => 'Có lỗi xảy ra']);
    }
}
