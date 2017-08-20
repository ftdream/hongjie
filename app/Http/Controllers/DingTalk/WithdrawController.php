<?php

namespace HongeGroup\Http\Controllers\DingTalk;

use Illuminate\Http\Request;
use HongeGroup\Models\User;
use HongeGroup\Http\Controllers\Controller;
use HongeGroup\Http\Controllers\Consts;
use DingTalk;
use HongeGroup\Models\WithDraw;
use HongeGroup\Models\WithDrawData;

class WithdrawController extends Controller
{
    public function __construct() {
    }

    public function getIndex(Request $request){
        $requestList = $request->all();
        $project_name = trim($requestList['project_name'] ?? '');
        $project_number = trim($requestList['project_number'] ?? '');
        $withDrawLists = WithDraw::orderBy('created_at', 'desc');
        if($project_name){
            $withDrawLists->where('project_name', 'like', '%'.$project_name.'%');
        }
        if($project_number){
            $withDrawLists->where('project_number', '=', $project_number);
        }
        $withDrawLists = $withDrawLists->select('id', 'project_name', 'contract_number', 'party_a_name', 'project_manager', 'created_at')
                            ->paginate('20');
        $total = $withDrawLists->total();
        $pages = $withDrawLists->links();
        $list = $withDrawLists->items();
        return view('withdraw.index')->with(compact('total', 'pages', 'list'));
    }

    public function getInfo(Request $request){
    
    }

    public function getAdd(Request $request){
        $requestList = $request->all();
        $info_id = $requestList['info_id'] ?? 0;
        $withdraw = WithDraw::find($info_id);
        $noteBackAmountSum = 0;
        $noteAmountSum = 0;
        if($withdraw){
            $withdrawData = WithDrawData::where('withdraw_id', $info_id)->where('step', '>=', 5)->get();
            if($withdrawData){
                foreach($withdrawData as $data){
                    $noteBackAmountSum += $data->note_back_amount;
                    $noteAmountSum += $data->note_amount;
                }
            }
        }
        $projectTakeAmount = ($withdraw->contract_talk_amount ?? 0) - $noteBackAmountSum;
        $projectBackSum = $noteAmountSum - $noteBackAmountSum;
        return view('withdraw.add')->with(compact('withdraw', 'projectTakeAmount', 'projectBackSum', 'noteAmountSum'));
    }

    public function postAjaxStep1(Request $request){
        $requestList = $request->all();
        $info = [
            'contract_number' => trim($requestList['contract_number'] ?? ''),
            'contract_time' => strtotime($requestList['contract_time'] ?? 0),
            'contract_amount' => trim($requestList['contract_amount'] ?? 0),
            'apply_time' => strtotime($requestList['apply_time'] ?? 0),
            'contract_talk_amount' => trim($requestList['contract_talk_amount'] ?? ''),
            'talk_amount' => trim($requestList['talk_amount'] ?? 0),
            'talk' => trim($requestList['talk'] ?? ''),
            'party_a_name' => trim($requestList['party_a_name'] ?? ''),
            'project_manager' => trim($requestList['project_manager'] ?? ''),
            'emergency_mobile' => trim($requestList['emergency_mobile'] ?? ''),
            'project_name' => trim($requestList['project_name'] ?? ''),
            'begin_time' => strtotime($requestList['begin_time'] ?? 0),
            'end_time' => strtotime($requestList['end_time'] ?? 0),
            'project_take_amount' => trim($requestList['project_take_amount'] ?? 0),
            'project_back_sum' => trim($requestList['project_back_sum'] ?? 0),
            ];
        $withdraw = new WithDraw($info); 
        $withdraw->save();
        $data = [
            'note_amount' => trim($requestList['note_amount'] ?? 0),
            'note_time' => strtotime($requestList['note_time'] ?? 0),
            'apply_amount' => trim($requestList['apply_amount'] ?? 0),
            'withdraw_id' => $withdraw->id,
            'step' => 1,
            ];
        $withdrawData = new WithDrawData($data);
        $withdrawData->save();
        return redirect()->to('/withdraw/index');
    } 

    public function getStep2(Request $request){
        $requestList = $request->all();
        $infoId = $requestList['info_id'] ?? 0;
        $dataId = $requestList['data_id'] ?? 0;
        $withdraw = WithDraw::find($infoId);
        $withdraw_data = WithDrawData::where('id', $dataId)->where('withdraw_id', $infoId)->first();
        if(!$withdraw || !$withdraw_data){
            throw new Exception('参数错误');
        }
        $noteBackAmountSum = 0;
        $noteAmountSum = 0;
        if($withdraw){
            $withdrawData = WithDrawData::where('withdraw_id', $info_id)->where('step', '>=', 5)->get();
            if($withdrawData){
                foreach($withdrawData as $data){
                    $noteBackAmountSum += $data->note_back_amount;
                    $noteAmountSum += $data->note_amount;
                }
            }
        }
        $projectTakeAmount = ($withdraw->contract_talk_amount ?? 0) - $noteBackAmountSum;
        $projectBackSum = $noteAmountSum - $noteBackAmountSum;
   
    }
}
