<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::latest()->paginate(10);
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        $input = $request->all();

        // Handle multiple image uploads
        if ($request->hasFile('image')) {
            $images = $request->file('image');  // Get all uploaded files
            $imagePaths = [];  // Initialize an array to store image paths

            foreach ($images as $image) {
                $imagePaths[] = $image->store('slider', 'public');  // Store each image
            }

            // Store the image paths as a comma-separated string
            $input['image'] = implode(',', $imagePaths);
        }

        $input['seo_title'] = $request->seo_title ?? $request->name;
        $slug = make_slug($request->name);

        // Create the slider entry in the database
        $slider = Slider::create($input);
        $slider->update(['slug' => $slug]);

        return redirect()->route('slider.index')->with('message', 'Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, Slider $slider)
    {
        $old_image = $slider->image;
        $input = $request->all();
        $image = fileUpload($request, 'image', 'slider');

        if ($image) {
            removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }

        $input['slug'] = make_slug($request->name);
        $slider->update($input);

        return redirect()->route('slider.edit', $slider->id)->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        removeFile($slider->image);
        $slider->delete();
        return redirect()->route('slider.index')->with('message', 'Deleted Successfully');
    }
}
