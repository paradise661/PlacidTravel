<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\AbroadCourses;
use Illuminate\Http\Request;

class AbroadCoursesController extends Controller
{ /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index($abroad_id)
   {
       $abroadcourse = AbroadCourses::where("abroad_id",$abroad_id)->latest()->paginate(10);
       return view('admin.abroad.abroadcourse.index', compact(['abroadcourse','abroad_id']));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create($abroad_id)
   {
       return view('admin.abroad.abroadcourse.create', compact("abroad_id"));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(StoreNewsRequest $request, $abroad_id)
   {
       $input = $request->all();
       $input['image'] = fileUpload($request, 'image', 'abroad');
       $input['abroad_id'] = $abroad_id;
       $abroad =  AbroadCourses::create($input);
       return redirect()->route('abroadcourse.index',$abroad_id)->with('message', 'Created Successfully');
   }
  
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   // public function show($id)
   // {
   //     //
   // }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($abroad_id, AbroadCourses $abroadcourse)
   {
       return view('admin.abroad.abroadcourse.edit', compact('abroad_id','abroadcourse'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(UpdateNewsRequest $request, $abroad_id, AbroadCourses $abroadcourse)
   {
       $old_image = $abroadcourse->image;
       $input = $request->all();
       $image = fileUpload($request, 'image', 'abroad');

       if ($image) {
           removeFile($old_image);
           $input['image'] = $image;
       } else {
           unset($input['image']);
       }

       $input['slug'] = make_slug($request->name);
       $abroadcourse->update($input);
       return redirect()->route('abroadcourse.edit', [$abroad_id, $abroadcourse->id])->with('message', 'Update Successfully');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($abroad_id,AbroadCourses $abroadcourse)
   {
       removeFile($abroadcourse->image);
       $abroadcourse->delete();
       return redirect()->route('abroadcourse.index', $abroad_id)->with('message', 'Delete Successfully');
   }
}
