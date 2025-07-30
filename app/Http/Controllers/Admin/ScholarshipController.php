<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{

    public function index()
    {
        $courses = Scholarship::latest()->paginate(10);
        return view('admin.course.index', compact('courses'));
    }


    public function create()
    {
        return view('admin.course.create');
    }


    public function store(StoreNewsRequest $request)
    {

        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'course');
        $input['banner_image'] = fileUpload($request, 'banner_image', 'course');
        $input['seo_title'] = $request->seo_title ?? $request->name;
        $slug = make_slug($request->name);
        $course =  Scholarship::create($input);
        $course->update(['slug' => $slug]);
        return redirect()->route('course.index')->with('message', 'Created Successfully');
    }


    // public function show($id)
    // {
    //     //
    // }


    public function edit(Scholarship $course)
    {
        return view('admin.course.edit', compact('course'));
    }


    public function update(UpdateNewsRequest $request, Scholarship $course)
    {
        $old_image = $course->image;
        $old_banner_image = $course->banner_image;
        $input = $request->all();
        $image = fileUpload($request, 'image', 'course');
        $banner_image = fileUpload($request, 'banner_image', 'course');

        if ($image) {
            removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }
        if ($banner_image) {
            removeFile($old_banner_image);
            $input['banner_image'] = $banner_image;
        } else {
            unset($input['banner_image']);
        }
        $input['slug'] = make_slug($request->name);
        $course->update($input);
        return redirect()->route('course.edit', $course->id)->with('message', 'Update Successfully');
    }


    public function destroy(Scholarship $course)
    {
        removeFile($course->image);
        removeFile($course->banner_image);
        $course->delete();
        return redirect()->route('course.index')->with('message', 'Delete Successfully');
    }
}
