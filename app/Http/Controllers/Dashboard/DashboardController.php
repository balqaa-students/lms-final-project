<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Materials;
use App\Models\Member;
use App\Models\Topic;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $topicsCount = Topic::all()->count();
        $materialsCount = Materials::all()->count();
        $membersCount = Member::all()->count();

        return view('dashboard.index' , compact('topicsCount', 'materialsCount', 'membersCount'));
    }
}
