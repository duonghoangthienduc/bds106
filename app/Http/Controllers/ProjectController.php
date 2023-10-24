<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::getTableProject();
        return view("admin.pages.project.list", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.pages.project.add");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $path = storeImage($request->file('thumb'), 'projects');
        $nameFile = str_replace("public/", "/storage/", $path);
        $project = [
            'name_project' => $request->name_project,
            'slug' => str()->of($request->name_project)->slug('-'),
            'price' => $request->price,
            'value' => $request->value,
            'unit' => $request->unit,
            'content' => htmlspecialchars($request->content),
            'location' => htmlspecialchars($request->location),
            'convince' => htmlspecialchars($request->convince),
            'decor' => htmlspecialchars($request->decor),
            'payment' => htmlspecialchars($request->payment),
            'place' => htmlspecialchars($request->place),
            'thumb' => $nameFile,
            'is_active' => $request->is_active,
        ];
        $status = Project::create($project);

        if ($status) {
            return redirect()->route('project.list')->with('success', 'Đăng bài viết thành công');
        }
        return back()->with('error', 'Có lỗi xảy ra');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $data = $project;
        return view('admin.pages.project.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        if ($request->file('thumb')) {
            $file = $request->input('img_category');
            $status = removeImage($file);
            if ($status) {
                $path = storeImage($request->file('thumb'));
                $newFile = str_replace("public/", "/storage/", $path);
                $updateStatus = $project->update([
                    'name_project' => $request->name_project,
                    'slug' => str()->of($request->name_project)->slug('-'),
                    'price' => $request->price,
                    'value' => $request->value,
                    'unit' => $request->unit,
                    'content' => htmlspecialchars($request->content),
                    'location' => htmlspecialchars($request->location),
                    'convince' => htmlspecialchars($request->convince),
                    'decor' => htmlspecialchars($request->decor),
                    'payment' => htmlspecialchars($request->payment),
                    'place' => htmlspecialchars($request->place),
                    'thumb' => $newFile,
                    'is_active' => $request->is_active,
                ]);
                if ($updateStatus) {
                    return redirect()->route('project.list')->with('success', 'Cập nhật thành công');
                }
                return back()->with('error', 'Có lỗi xảy ra');
            }
        } else {
            $updateStatus = $project->update([
                'name_project' => $request->name_project,
                'slug' => str()->of($request->name_project)->slug('-'),
                'price' => $request->price,
                'value' => $request->value,
                'unit' => $request->unit,
                'content' => htmlspecialchars($request->content),
                'location' => htmlspecialchars($request->location),
                'convince' => htmlspecialchars($request->convince),
                'decor' => htmlspecialchars($request->decor),
                'payment' => htmlspecialchars($request->payment),
                'place' => htmlspecialchars($request->place),
                'thumb' => $request->img_category,
                'is_active' => $request->is_active,
            ]);
            if ($updateStatus) {
                return redirect()->route('project.list')->with('success', 'Cập nhật thành công');
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
            $data = Project::where('id', $request->id)->first();
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
