<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Topic;
use App\Models\Materials;
use Illuminate\Http\Request;
use App\Models\MaterialCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $topic = Topic::findOrFail($request->topic_id);
        $categories = MaterialCategory::all();
        return view('dashboard.topic_materials.index' , compact('categories', 'topic'));
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
        $data = $request->except('file');

        if( $request->hasFile('file') ){
            $file = $request->file('file');
            $path = $file->store('materials' , 'public');
            $data['file'] = $path ;
        }
        Materials::create($data);
        return redirect()->back()->with('success' , 'Materail added successfully');
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
        $data = $request->except('file');

        $material = Materials::findOrFail($id);
        $old_file = $material->file;
        $data['file'] = $old_file;

        if( $request->hasFile('file')){
            $file = $request->file('file');
            $path = $file->store('materials' , 'public');
            $data['file'] = $path;
        }

        $material->update($data);

        if( $old_file && $request->hasFile('file') ){
            Storage::disk('public')->delete($old_file);
        }
        return redirect()->back()->with('success' , 'material updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = Materials::findOrFail($id);
        $material->delete();

        Storage::disk('public')->delete($material->file);
        return redirect()->back()->with('success' , 'material deleted successfully');
    }
}
