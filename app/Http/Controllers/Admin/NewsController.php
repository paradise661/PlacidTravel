<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Session;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class NewsController extends Controller
{

    public function index()
    {
        $blogs = News::latest()->paginate(10);
        return view('admin.news.index', compact('blogs'));
    }


    public function create()
    {
        return view('admin.news.create');
    }


    public function store(StoreNewsRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'blog');
        $input['banner_image'] = fileUpload($request, 'banner_image', 'blog');
        $input['seo_title'] = $request->seo_title ?? $request->name;
        $slug = make_slug($request->name);
        $blog =  News::create($input);
        $blog->update(['slug' => $slug]);
        return redirect()->route('blog.index')->with('message', 'Created Successfully');
    }


    // public function show($id)
    // {
    //     //
    // }


    public function edit(News $blog)
    {
        return view('admin.news.edit', compact('blog'));
    }

    public function update(UpdateNewsRequest $request, News $blog)
    {
        $old_image = $blog->image;
        $old_banner_image = $blog->banner_image;
        $input = $request->all();
        $image = fileUpload($request, 'image', 'blog');
        $banner_image = fileUpload($request, 'banner_image', 'blog');


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
        $blog->update($input);
        return redirect()->route('blog.edit', $blog->id)->with('message', 'Update Successfully');
    }


    public function destroy(News $blog)
    {
        removeFile($blog->image);
        removeFile($blog->banner_image);
        $blog->delete();
        return redirect()->route('blog.index')->with('message', 'Delete Successfully');
    }
}
