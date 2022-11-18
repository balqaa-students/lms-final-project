<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('dashboard.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( !$request->hasFile('image')){
            return redirect()->back()->with('danger' , 'Image is required');
        }
        $file = $request->file('image');
        $path = $file->store('members' , 'public');
        Member::create([
            'name'          => $request->name,
            'description'   => $request->description,
            'image'         => $path,
            'social_links'  => json_encode($request->social_links)
        ]);
        return redirect()->back()->with('success' , 'topic created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        $old_image = $member->image;

        if( $request->hasFile('image')){
            $file = $request->file('image');
            $path = $file->store('members' , 'public');
        }

        $member->update([
            'name'          => $request->name,
            'description'   => $request->description,
            'image'         => $path ?? $old_image,
            'social_links'  => json_encode($request->social_links),
        ]);

        if( $old_image && $request->hasFile('image') ){
            Storage::disk('public')->delete($old_image);
        }
        return redirect()->back()->with('success' , 'member inforamtions updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        Storage::disk('public')->delete($member->image);
        return redirect()->back()->with('success' , 'member deleted successfully');
    }
}
