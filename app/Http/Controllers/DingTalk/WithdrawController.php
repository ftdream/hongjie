<?php

namespace HongeGroup\Http\Controllers\DingTalk;

use Illuminate\Http\Request;
use HongeGroup\Models\User;
use HongeGroup\Http\Controllers\Controller;
use HongeGroup\Http\Controllers\Consts;
use DingTalk;

class WithdrawController extends Controller
{
    public function __construct() {
    }

    public function getIndex(Request $request){
        dd(DingTalk::getConfig());
        return view('welcome');
    }
}
