<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Recruitments;
use App\Http\Requests\StoreRecruitmentsRequest;
use Session;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class RecruitmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruitment = Recruitments::latest()->paginate(10);
        return view('admin.recruitments.index', compact('recruitment'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recruitments $recruitment)
    {
        return view('admin.recruitments.show', compact('recruitment'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruitments $recruitment)
    {
        $recruitment->delete();
        return redirect()->route('recruitment.index')->with('message', 'Delete Successfully');
    }

    public function recruitment(StoreRecruitmentsRequest $request)
    {
        $input = $request->all();
        $input['resume'] = fileUpload($request, 'resume', 'recruitment');
        $input['coverletter'] = fileUpload($request, 'coverletter', 'recruitment');
        Recruitments::create($input);
        return redirect()->back()->with('message', 'Your message have been submitted successfully.');
    }
}
