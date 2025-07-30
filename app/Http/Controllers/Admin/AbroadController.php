<?php

namespace App\Http\Controllers\Admin;

use App\Models\Abroad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;

class AbroadController extends Controller
{

    public function index()
    {
        $abroads = Abroad::latest()->paginate(10);
        return view('admin.abroad.index', compact('abroads'));
    }


    public function create()
    {
        return view('admin.abroad.create');
    }


    public function store(StoreNewsRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'abroad');
        $input['banner_image'] = fileUpload($request, 'banner_image', 'abroad');
        $input['seo_title'] = $request->seo_title ?? $request->name;
        $slug = make_slug($request->name);
        $abroad =  Abroad::create($input);
        $abroad->update(['slug' => $slug]);
        return redirect()->route('abroad.index')->with('message', 'Created Successfully');
    }


    // public function show($id)
    // {
    //     //
    // }


    public function edit(Abroad $abroad)
    {
        return view('admin.abroad.edit', compact('abroad'));
    }


    public function update(UpdateNewsRequest $request, Abroad $abroad)
    {
        $old_image = $abroad->image;
        $input = $request->all();
        $image = fileUpload($request, 'image', 'abroad');
        $banner_image = fileUpload($request, 'banner_image', 'abroad');

        if ($image) {
            removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }

        if ($banner_image) {
            removeFile($old_image);
            $input['banner_image'] = $banner_image;
        } else {
            unset($input['banner_image']);
        }

        $input['slug'] = make_slug($request->name);
        $abroad->update($input);
        return redirect()->route('abroad.edit', $abroad->id)->with('message', 'Update Successfully');
    }

    public function destroy(Abroad $abroad)
    {
        removeFile($abroad->image);
        removeFile($abroad->banner_image);
        $abroad->delete();
        return redirect()->route('abroad.index')->with('message', 'Delete Successfully');
    }
}
