@extends('withdraw.header')
@section('title')弘洁审批@stop
@section('descripton')弘洁审批@stop
@section('content')
<div class="content">
    <div class="content_body">
        <div class="the_path"><a href="/general/hongjie">首页</a> >开票取款申请单</div>
        <div class="content_box">
            <div class="top_line2"></div>
            <div class="the_content">
                <div class="the_left">
                    <div>
                        <form id="searchform" action="post_step1.php" method="post" onsubmit="return check();">
                            <input type="hidden" name="infoId" value=""/>
                            <table class="table table-bordered">
                                <tbody>

                                    <tr>
                                        <td>合同编号</td>
                                        <td><input type="text" name="NOTE_AMOUNT" id="note_amount"></td>
                                        <td>合同签订日期</td>
                                        <td><input type="text" name="NOTE_BACK_TIME" onFocus="WdatePicker({isShowClear:true,readOnly:true});" readonly disabled></td>
                                        <td>合同金额</td>
                                        <td><input type="text" name="NOTE_AMOUNT" id="note_amount"></td>
                                        <td>申请日期</td>
                                        <td><input type="text" name="NOTE_BACK_TIME" onFocus="WdatePicker({isShowClear:true,readOnly:true});" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>合同及洽商金额</td>
                                        <td colspan="3"><input type="text" name="NOTE_AMOUNT" id="note_amount"></td>
                                        <td>洽商金额</td>
                                        <td><input type="text" name="NOTE_AMOUNT" id="note_amount"></td>
                                        <td>洽商内容</td>
                                        <td><input type="text" name="NOTE_AMOUNT" id="note_amount"></td>
                                    </tr>
                                
                                    <tr>
                                        <td>甲方名称</td>
                                        <td colspan="3"><span><input type="text" name="NOTE_AMOUNT" id="note_amount"></td>
                                        <td>项目经理及电话</td>
                                        <td><input type="text" name="NOTE_AMOUNT" id="note_amount"></td>
                                        <td>紧急联系人及电话</td>
                                        <td><input type="text" name="NOTE_AMOUNT" id="note_amount"></td>
                                    </tr>
                                    <tr>
                                        <td>工程名称</td>
                                        <td colspan="3"><input type="text" name="NOTE_AMOUNT" id="note_amount"></td>
                                        <td>开工日期</td>
                                        <td><input type="text" name="NOTE_BACK_TIME" onFocus="WdatePicker({isShowClear:true,readOnly:true});" readonly disabled></td>
                                        <td>竣工日期</td>
                                        <td><input type="text" name="NOTE_BACK_TIME" onFocus="WdatePicker({isShowClear:true,readOnly:true});" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本项目应收账款</td>
                                        <td colspan="3"><input type="text" name="NOTE_AMOUNT" id="note_amount"></td>
                                        <td>开票回款累计</td>
                                        <td colspan="3"><input type="text" name="NOTE_AMOUNT" id="note_amount"></td>
                                    </tr>
                                    <tr>
                                        <td>本次开票金额</td>
                                        <td><input type="text" name="NOTE_AMOUNT" id="note_amount" onblur="addSum()"></td>
                                        <td>开票日期</td>
                                        <td><input type="text" name="NOTE_TIME" onFocus="WdatePicker({isShowClear:true,readOnly:true});" readonly id="note_time"></td>
                                        <td colspan="2">累计开票金额<input type="hidden" id="note_amount_hidden"></td>
                                        <td colspan="2"><input type="text" name="NOTE_AMOUNT_SUM" id="note_amount_sum" disabled ></td>
                                   
                                    </tr>
                                    <tr>
                                        <td>本次回款金额</td>
                                        <td><input type="text" name="NOTE_BACK_AMOUNT" readonly disabled></td>
                                        <td>回款日期</td>
                                        <td><input type="text" name="NOTE_BACK_TIME" onFocus="WdatePicker({isShowClear:true,readOnly:true});" readonly disabled></td>
                                        <td colspan="2">累计回款金额</td>
                                        <td colspan="2"><input type="text" name="NOTE_BACK_AMOUNT_SUM" readonly disabled></td>
                                    
                                    </tr>
                                    <tr>
                                        <td>本次申请金额</td>
                                        <td colspan="7"><input type="text" name="APPLY_AMOUNT" style="width: 550px;" id="apply_amount"></td>
                                    </tr>
                                    <tr>
                                        <td>本次预留税金</td>
                                        <td colspan="3"><input type="text" name="RESERVED_TAX" style="width: 250px;" readonly disabled></td>
                                        <td>累计预留税金</td>
                                        <td colspan="3"><input type="text" name="RESERVED_TAX_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次预留质保金</td>
                                        <td colspan="3"><input type="text" name="RESERVED_GUARANTEE" style="width: 250px;" readonly disabled></td>
                                        <td>累计预留质保金</td>
                                        <td colspan="3"><input type="text" name="RESERVED_GUARANTEE_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次预留项目利润</td>
                                        <td colspan="3"><input type="text" name="RESERVED_PROFIT" style="width: 250px;" readonly disabled></td>
                                        <td>累计预留项目利润</td>
                                        <td colspan="3"><input type="text" name="RESERVED_PROFIT_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次预留其它款</td>
                                        <td colspan="3"><input type="text" name="RESERVED_ORTHER_MONEY" style="width: 250px;" readonly disabled></td>
                                        <td>累计预留其它款</td>
                                        <td colspan="3"><input type="text" name="RESERVED_ORTHER_MONEY_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次上交成本费用发票金额</td>
                                        <td colspan="3"><input type="text" name="DELIVERY_COST" style="width: 250px;" readonly disabled></td>
                                        <td>累计上交成本费用发票金额</td>
                                        <td colspan="3"><input type="text" name="DELIVERY_COST_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次上交异地预缴增值税</td>
                                        <td colspan="3"><input type="text" name="DELIVERY_ADD_TAX" style="width: 250px;" readonly disabled></td>
                                        <td>累计上交异地预缴增值税</td>
                                        <td colspan="3"><input type="text" name="DELIVERY_ADD_TAX_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>城建税</td>
                                        <td colspan="3"><input type="text" name="CITY_TAX" style="width: 250px;" readonly disabled></td>
                                        <td>累计城建税</td>
                                        <td colspan="3"><input type="text" name="CITY_TAX_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>教育费附加</td>
                                        <td colspan="3"><input type="text" name="EDUICATION_COST" style="width: 250px;" readonly disabled></td>
                                        <td>累计教育费附加</td>
                                        <td colspan="3"><input type="text" name="EDUICATION_COST_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>地方教育费附加</td>
                                        <td colspan="3"><input type="text" name="AREA_EDUICATION_COST" style="width: 250px;" readonly disabled></td>
                                        <td>累计地方教育费附加</td>
                                        <td colspan="3"><input type="text" name="AREA_EDUICATION_COST_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>企业所得税</td>
                                        <td colspan="3"><input type="text" name="BUSINESS_TAX" style="width: 250px;" readonly disabled></td>
                                        <td>累计企业所得税</td>
                                        <td colspan="3"><input type="text" name="BUSINESS_TAX_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次应取款金额</td>
                                        <td colspan="3"><input type="text" name="SHOULD_TAKE_AMOUNT" style="width: 250px;" readonly disabled></td>
                                        <td>累计应取款金额</td>
                                        <td colspan="3"><input type="text" name="SHOULD_ATKE_AMOUNT_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>本次剩余应取金额</td>
                                        <td colspan="3"><input type="text" name="SHOULD_TAKE_LAST_AMOUNT" style="width: 250px;" readonly disabled></td>
                                        <td>累计剩余应取金额</td>
                                        <td colspan="3"><input type="text" name="SHOULD_TAKE_LAST_AMOUNT_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                
                                    <tr>
                                        <td>本次实际取款金额</td>
                                        <td><input type="text" name="TAKE_AMOUNT" readonly disabled></td>
                                        <td>付款方式</td>
                                        <td><input type="text" name="TYPE" readonly disabled></td>
                                        <td>累计实际取款金额</td>
                                        <td colspan="3"><input type="text" name="TAKE_AMOUNT_SUM" style="width: 250px;" readonly disabled></td>
                                    </tr>
                                    <tr>
                                        <td>备注</td>
                                        <td colspan="7"><input type="text" name="REMARK" style="width: 600px;" readonly disabled></td>
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

