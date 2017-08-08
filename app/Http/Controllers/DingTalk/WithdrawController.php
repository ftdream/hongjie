<?php

namespace HongeGroup\Http\Controllers\DingTalk;

use Illuminate\Http\Request;
use HongeGroup\Models\User;
use HongeGroup\Http\Controllers\Controller;
use HongeGroup\Http\Controllers\Consts;
use DingTalk;
use HongeGroup\Models\WithDraw;

class WithdrawController extends Controller
{
    public function __construct() {
    }

    public function getIndex(Request $request){
        //dd(DingTalk::getConfig());
        $withDrawLists = WithDraw::orderBy('created_at', 'desc')
                            ->select('id', 'project_name', 'created_at')
                            ->paginate('20');
        dd( $withDrawLists);
        return view('withdraw.index');
    }

    public function getInfo(Request $request){
    
    }

    public function getAdd(Request $request){
        return view('withdraw.add');
    }

    public function postStep1(Request $request){
        
    } 
}
