<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Topic;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TopicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = Year::all();
        $categories = Category::all();
        $topics = Topic::with('year' , 'category')->get();
        return view('dashboard.topics.index' , compact('years' , 'categories', 'topics'));
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
        $path = $file->store('topics' , 'public');

        Topic::create([
            'title'         => $request->title,
            'description'   => $request->description,
            'image'         => $path,
            'year_id'       => $request->year_id,
            'category_id'   => $request->category_id,
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
        $topic = Topic::findOrFail($id);
        $old_image = $topic->image;

        if( $request->hasFile('image')){
            $file = $request->file('image');
            $path = $file->store('topics' , 'public');
        }

        $topic->update([
            'title'         => $request->title,
            'description'   => $request->description,
            'image'         => $path ?? $old_image,
            'year_id'       => $request->year_id,
            'category_id'   => $request->category_id,
        ]);

        if( $old_image && $request->hasFile('image') ){
            Storage::disk('public')->delete($old_image);
        }
        return redirect()->back()->with('success' , 'topic updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Topic::findOrFail($id);
        $topic->delete();

        Storage::disk('public')->delete($topic->image);
        return redirect()->back()->with('success' , 'topic deleted successfully');

    }
}
