@extends('withdraw.header')
@section('title')弘洁审批@stop
@section('descripton')弘洁审批@stop
@section('content')
<div class="content">
    <div class="content_body">
        <div class="the_path"><a href="/withdraw/index">首页</a> >开票取款申请单</div>
        <div class="content_box">
            <div class="top_line2"></div>
            <div class="the_content">
                <div class="the_left">
                    <div>
                        <form id="searchform" action="/withdraw/ajax_step1" method="post" onsubmit="return check();">
                             {{ csrf_field() }}
                            <input type="hidden" name="info_id" value=""/>
                            <table class="table table-bordered">
                                <tbody>
                                    @if($withdraw)
                                    <tr>
                                        <td>合同编号</td>
                                        <td>{{$withdraw->contract_number}}</td>
                                        <td>合同签订日期</td>
                                        <td>{{date('Y-m-d', $withdraw->contract_time)}}</td>
                                        <td>合同金额</td>
                                        <td>{{$withdraw->contract_amount}}</td>
                                        <td>申请日期</td>
                                        <td>{{date('Y-m-d', $withdraw->apply_time)}}</td>
                                    </tr>
                                    <tr>
                                        <td>合同及洽商金额</td>
                                        <td colspan="3">{{$withdraw->contract_talk_amount}}</td>
                                        <td>洽商金额</td>
                                        <td>{{$withdraw->talk_amount}}</td>
                                        <td>洽商内容</td>
                                        <td>{{$withdraw->talk}}</td>
                                    </tr>
                                
                                    <tr>
                                        <td>甲方名称</td>
                                        <td colspan="3"><span>{{$withdraw->party_a_name}}</span></td>
                                        <td>项目经理及电话</td>
                                        <td>{{$withdraw->project_manager}}</td>
                                        <td>紧急联系人及电话</td>
                                        <td>{{$withdraw->emergency_mobile}}</td>
                                    </tr>
                                    <tr>
                                        <td>工程名称</td>
                                        <td colspan="3">{{$withdraw->project_name}}</td>
                                        <td>开工日期</td>
                                        <td>{{date('Y-m-d', $withdraw->begin_time)}}</td>
                                        <td>竣工日期</td>
                                        <td>{{date('Y-m-d', $withdraw->end_time)}}</td>
                                    </tr>
                                    <tr>
                                        <td>本项目应收账款</td>
                                        <td colspan="3">{{$projectTakeAmount}}</td>
                                        <td>开票回款累计</td>
                                        <td colspan="3">{{$projectBackSum}}</td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td>合同编号</td>
                                        <td><input type="text" name="contract_number" id="contract_number"></td>
                                        <td>合同签订日期</td>
                                        <td><input type="text" name="contract_time" id="contract_time" onFocus="WdatePicker({isShowClear:true,readOnly:true});" readonly></td>
                                        <td>合同金额</td>
                                        <td><input type="text" name="contract_amount" id="contract_amount"></td>
                                        <td>申请日期</td>
                                        <td><input type="text" name="apply_time" id="apply_time" onFocus="WdatePicker({isShowClear:true,readOnly:true});" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>合同及洽商金额</td>
                                        <td colspan="3"><input type="text" name="contract_talk_amount" id="contract_talk_amount"></td>
                                        <td>洽商金额</td>
                                        <td><input type="text" name="talk_amount" id="talk_amount"></td>
                                        <td>洽商内容</td>
                                        <td><input type="text" name="talk" id="talk"></td>
                                    </tr>
                                
                                    <tr>
                                        <td>甲方名称</td>
                                        <td colspan="3"><span><input type="text" name="party_a_name" id="party_a_name"></td>
                                        <td>项目经理及电话</td>
                                        <td><input type="text" name="project_manager" id="project_manager"></td>
                                        <td>紧急联系人及电话</td>
                                        <td><input type="text" name="emergency_mobile" id="emergency_mobile"></td>
                                    </tr>
                                    <tr>
                                        <td>工程名称</td>
                                        <td colspan="3"><input type="text" name="project_name" id="project_name"></td>
                                        <td>开工日期</td>
                                        <td><input type="text" name="begin_time" id="begin_time" onFocus="WdatePicker({isShowClear:true,readOnly:true});" readonly ></td>
                                        <td>竣工日期</td>
                                        <td><input type="text" name="end_time" id="end_time" onFocus="WdatePicker({isShowClear:true,readOnly:true});" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>本项目应收账款</td>
                                        <td colspan="3"><input type="text" name="project_take_amount" id="project_take_amount"></td>
                                        <td>开票回款累计</td>
                                        <td colspan="3"><input type="text" name="project_back_sum" id="project_back_sum"></td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td>本次开票金额</td>
                                        <td><input type="text" name="note_amount" id="note_amount" onblur="addSum()"></td>
                                        <td>开票日期</td>
                                        <td><input type="text" name="note_time" id="note_time" onFocus="WdatePicker({isShowClear:true,readOnly:true});" readonly id="note_time"></td>
                                        <td colspan="2">累计开票金额<input type="hidden" id="note_amount_hidden" value="{{$noteAmountSum}}"></td>
                                        <td colspan="2"><input type="text" name="NOTE_AMOUNT_SUM" id="note_amount_sum" disabled ></td>
                                   
                                    </tr>
                                    <tr>
                                        <td>本次回款金额</td>
                                        <td><input type="text" name="note_back_amount" id="note_back_amount" readonly disabled></td>
                                        <td>回款日期</td>
                                        <td><input type="text" name="note_back_time" id="note_back_time" onFocus="WdatePicker({isShowClear:true,readOnly:true});" readonly disabled></td>
                                        <td colspan="2">累计回款金额</td>
                                        <td colspan="2"><input type="text" name="NOTE_BACK_AMOUNT_SUM" readonly disabled></td>
                                    
                                    </tr>
                                    <tr>
                                        <td>本次申请金额</td>
                                        <td colspan="7"><input type="text" name="apply_amount" style="width: 550px;" id="apply_amount"></td>
                                    </tr>
                                    <tr>
                                        <td>本次预留税金</td>
                                        <td colspan="3"><input type="text" name="reserved_tax" id="reserved_tax" style="width: 250px;" readonly disabled></td>
                                        <td>累计预留税金</td>
                                        <td colspan="3"><input type="text" name="RESERVED_TAX_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次预留质保金</td>
                                        <td colspan="3"><input type="text" name="reserved_guarantee" id="reserved_guarantee" style="width: 250px;" readonly disabled></td>
                                        <td>累计预留质保金</td>
                                        <td colspan="3"><input type="text" name="RESERVED_GUARANTEE_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次预留项目利润</td>
                                        <td colspan="3"><input type="text" name="reserved_profit" id="reserved_profit" style="width: 250px;" readonly disabled></td>
                                        <td>累计预留项目利润</td>
                                        <td colspan="3"><input type="text" name="RESERVED_PROFIT_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次预留其它款</td>
                                        <td colspan="3"><input type="text" name="resetved_other_money" id="resetved_other_money" style="width: 250px;" readonly disabled></td>
                                        <td>累计预留其它款</td>
                                        <td colspan="3"><input type="text" name="RESERVED_ORTHER_MONEY_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次上交成本费用发票金额</td>
                                        <td colspan="3"><input type="text" name="delivery_cost" id="delivery_cost" style="width: 250px;" readonly disabled></td>
                                        <td>累计上交成本费用发票金额</td>
                                        <td colspan="3"><input type="text" name="DELIVERY_COST_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次上交异地预缴增值税</td>
                                        <td colspan="3"><input type="text" name="delivery_add_tax" id="delivery_add_tax" style="width: 250px;" readonly disabled></td>
                                        <td>累计上交异地预缴增值税</td>
                                        <td colspan="3"><input type="text" name="DELIVERY_ADD_TAX_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>城建税</td>
                                        <td colspan="3"><input type="text" name="city_tax" id="city_tax" style="width: 250px;" readonly disabled></td>
                                        <td>累计城建税</td>
                                        <td colspan="3"><input type="text" name="CITY_TAX_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>教育费附加</td>
                                        <td colspan="3"><input type="text" name="eduication_cost" id="eduication_cost" style="width: 250px;" readonly disabled></td>
                                        <td>累计教育费附加</td>
                                        <td colspan="3"><input type="text" name="EDUICATION_COST_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>地方教育费附加</td>
                                        <td colspan="3"><input type="text" name="area_eduication_cost" id="area_eduication_cost" style="width: 250px;" readonly disabled></td>
                                        <td>累计地方教育费附加</td>
                                        <td colspan="3"><input type="text" name="AREA_EDUICATION_COST_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>企业所得税</td>
                                        <td colspan="3"><input type="text" name="business_tax" id="business_tax" style="width: 250px;" readonly disabled></td>
                                        <td>累计企业所得税</td>
                                        <td colspan="3"><input type="text" name="BUSINESS_TAX_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次应取款金额</td>
                                        <td colspan="3"><input type="text" name="should_take_amount" id="should_take_amount" style="width: 250px;" readonly disabled></td>
                                        <td>累计应取款金额</td>
                                        <td colspan="3"><input type="text" name="SHOULD_ATKE_AMOUNT_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次剩余应取金额</td>
                                        <td colspan="3"><input type="text" name="should_take_last_amount" id="should_take_last_amount" style="width: 250px;" readonly disabled></td>
                                        <td>累计剩余应取金额</td>
                                        <td colspan="3"><input type="text" name="SHOULD_TAKE_LAST_AMOUNT_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                
                                    <tr>
                                        <td>本次实际取款金额</td>
                                        <td><input type="text" name="take_amount" id="take_amount" readonly disabled></td>
                                        <td>付款方式</td>
                                        <td><input type="text" name="type" id="type" readonly disabled></td>
                                        <td>累计实际取款金额</td>
                                        <td colspan="3"><input type="text" name="TAKE_AMOUNT_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>备注</td>
                                        <td colspan="7"><input type="text" name="remark" style="width: 600px;" readonly disabled></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="two_btn_new">
                                <input type="submit" value="提交" class="btn search_btn2"/>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="bottom_line"></div>
        </div>
    </div>
</div>
<script>
function check(){
    
    note_amount = $('#note_amount').val();
    if(!$.trim(note_amount)){
        alert('请填写开票金额');
        return false;
    }
    note_time = $('#note_time').val();
    if(!$.trim(note_time)){
        alert('请填写开票日期');
        return false;
    }
    
    apply_amount = $('#apply_amount').val();
    if(!$.trim(apply_amount)){
        alert('请填写申请金额');
        return false;
    }
    return true;
}
function addSum(){
    note_amount = $('#note_amount').val();
    if(!$.trim(note_amount)){
        alert('请填写开票金额');
        return false;
    }
    note_amount_hidden = $('#note_amount_hidden').val();
    if(!$.trim(note_amount_hidden)){
        $('#note_amount_sum').val(note_amount);
    }else{
        $('#note_amount_sum').val(accAdd(note_amount_hidden, note_amount));
    }

}
</script>
@stop

