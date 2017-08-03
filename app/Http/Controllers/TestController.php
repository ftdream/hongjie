<?php

namespace HongeGroup\Http\Controllers;

use HongeGroup\Models\Test;
use DB;

class TestController extends Controller
{
	public function __construct(){

	}

	public function getIndex(){
		
		dd(DB::table('test')->get());
		dd(DingTalk::getDepartmentList());
	}
}
