<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Member;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Session;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class MemberController extends Controller
{

    public function index()
    {
        $member = Member::latest()->paginate(10);
        return view('admin.member.index', compact('member'));
    }


    public function create()
    {
        return view('admin.member.create');
    }


    public function store(StoreMemberRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'member');
        $member =  Member::create($input);
        return redirect()->route('members.index')->with('message', 'Created Successfully');
    }


    // public function show(Member $member)
    // {
    //     //
    // }


    public function edit(Member $member)
    {
        return view('admin.member.edit', compact('member'));
    }


    public function update(UpdateMemberRequest $request, Member $member)
    {
        $old_image = $member->image;
        $input = $request->all();
        $image = fileUpload($request, 'image', 'member');

        if ($image) {
            removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }
        $member->update($input);
        return redirect()->route('members.edit', $member->id)->with('message', 'Update Successfully');
    }


    public function destroy(Member $member)
    {
        removeFile($member->image);
        $member->delete();
        return redirect()->route('members.index')->with('message', 'Delete Successfully');
    }
}
