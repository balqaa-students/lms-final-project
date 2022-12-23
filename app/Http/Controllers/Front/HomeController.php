<?php

namespace App\Http\Controllers\Front;

use App\Models\Year;
use App\Models\Topic;
use App\Models\Member;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MaterialCategory;
use App\Models\Materials;

class HomeController extends Controller
{
    public function index(){
        $years = Year::withCount('topics')->get();
        $members = Member::all();
        return view('Front.index' , compact('years' , 'members'));
    }

    public function topics($year_id){
        $year = Year::findOrFail($year_id);
        $categories = Category::withCount(['topics' => function($q) use ($year_id){
            $q->where('year_id' , $year_id);
        }])->get();
        $topics = Topic::where('year_id' , $year->id )->get();
        return view('Front.topics' ,compact('categories' , 'year' , 'topics') );
    }

    public function materials($topic_id){
        // dd('hello');
        $topic = Topic::findOrFail($topic_id);
        $materials = Materials::where('topic_id' , $topic_id)->get();
        $categories = MaterialCategory::withCount(['materials' => function($q) use ($topic_id){
            $q->where('topic_id' , $topic_id);
        }])->get();
        // dd($categories);
        return view('Front.materials', compact('topic' , 'materials' , 'categories'));
    }

    public function download($file){
        return response()->download(public_path('storage/'.$file));
    }
}
