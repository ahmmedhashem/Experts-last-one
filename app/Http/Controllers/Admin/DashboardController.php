<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main_criteria;
use App\Models\Role;
use App\Models\Data;

class DashboardController extends Controller
{
    public function index(){
        $main_criteria = Main_criteria::select('name','id') -> get();
        $rules = Role::select('name','id') -> get();

        $datas = Data::with(['activity' => function($act) {
            $act -> with('criteria');
        },'mission' => function($mis) {
            $mis -> with('rule');
        },'createra','role'])  ->whereNull('activity_id') -> orWhereNull('mission_id') -> orWhereNull('rule_id') -> orderBy('id','DESC') -> paginate(PAGINATION_COUNT);

        $most = Data::with(['activity' => function($act) {
            $act -> with('criteria');
        },'mission' => function($mis) {
            $mis -> with('rule');
        },'createra','role']) -> select('name') ->selectRaw('count(name) as qty') -> groupBy('name') -> orderByRaw('COUNT(name) DESC') -> limit(5) -> get();
    //     App\Animal::select('name')
    // ->groupBy('name')
    // ->orderByRaw('COUNT(*) DESC')
    // ->limit(1)
    // ->get();
    // return $datas;

        return view('admin.dashboard',compact('main_criteria','rules','datas','most'));
    }
}
