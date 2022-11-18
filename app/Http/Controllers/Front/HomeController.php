<?php

namespace App\Http\Controllers\Front;

use App\Models\Year;
use App\Models\Topic;
use App\Models\Member;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
