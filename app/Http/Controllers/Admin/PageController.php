<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Http\Requests\StoreGlobalRequest;
use App\Http\Requests\UpdateGlobalRequest;
use Session;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class PageController extends Controller
{

    public function index()
    {
        $page = Page::latest()->paginate(10);
        return view('admin.page.index', compact('page'));
    }


    public function create()
    {
        return view('admin.page.create');
    }


    public function store(StoreGlobalRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'page');
        $input['banner_image'] = fileUpload($request, 'banner_image', 'page');
        $input['seo_title'] = $request->seo_title ?? $request->name;
        $slug = make_slug($request->name);
        $page =  Page::create($input);
        $page->update(['slug' => $slug]);
        return redirect()->route('page.index')->with('message', 'Created Successfully');
    }


    // public function show($id)
    // {
    //     //
    // }


    public function edit(Page $page)
    {
        return view('admin.page.edit', compact('page'));
    }

    public function update(UpdateGlobalRequest $request, Page $page)
    {
        $old_image = $page->image;
        $old_banner_image = $page->banner_image;
        $input = $request->all();
        $image = fileUpload($request, 'image', 'page');
        $banner_image = fileUpload($request, 'banner_image', 'page');

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
        $page->update($input);
        return redirect()->route('page.edit', $page->id)->with('message', 'Update Successfully');
    }


    public function destroy(Page $page)
    {
        removeFile($page->image);
        removeFile($page->banner_image);
        $page->delete();
        return redirect()->route('page.index')->with('message', 'Delete Successfully');
    }
}
