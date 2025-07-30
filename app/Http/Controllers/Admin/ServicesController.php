<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateServicesRequest;
use Session;
use File;
use Illuminate\Support\Str;
use PHPUnit\Framework\Error\Notice;

class ServicesController extends Controller
{

    public function index()
    {
        $services = Services::latest()->paginate(10);
        return view('admin.services.index', compact('services'));
    }


    public function create()
    {
        return view('admin.services.create');
    }


    public function store(StoreServicesRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'services');
        $input['banner_image'] = fileUpload($request, 'banner_image', 'services');
        $input['seo_title'] = $request->seo_title ?? $request->name;
        $slug = make_slug($request->name);
        $services =  Services::create($input);
        $services->update(['slug' => $slug]);
        return redirect()->route('services.index')->with('message', 'Created Successfully');
    }

    // public function show($id)
    // {
    //     //
    // }


    public function edit(Services $service)
    {
        return view('admin.services.edit', compact('service'));
    }


    public function update(UpdateServicesRequest $request, Services $service)
    {
        $old_image = $service->image;
        $old_banner_image = $service->banner_image;
        $input = $request->all();
        $image = fileUpload($request, 'image', 'services');
        $banner_image = fileUpload($request, 'banner_image', 'services');

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
        $input['seo_title'] = $request->seo_title ?? $request->name;
        $service->update($input);
        return redirect()->route('services.edit', $service->id)->with('message', 'Update Successfully');
    }


    public function destroy(Services $service)
    {
        removeFile($service->image);
        removeFile($service->banner_image);
        $service->delete();
        return redirect()->route('services.index')->with('message', 'Delete Successfully');
    }
}
