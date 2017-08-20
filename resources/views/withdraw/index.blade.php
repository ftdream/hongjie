@extends('withdraw.header')
@section('title')弘洁审批@stop
@section('descripton')弘洁审批@stop
@section('content')
<div class="content">
    <div class="content_body">
        <div class="the_path"><a href="/general/hongjie">首页</a> > 开票取款申请单</div>
        <div class="content_box">
            <div class="top_line2"></div>
            <div class="the_content">
                <div class="the_left">
                <form id="searchform" action="" method="get">
                    <div class="one_input2 key_word">
                        <label>工程名称：</label>
                        <input type="text" class="input_text input3" name="project_name" id="project_name" value="{{$project_name??''}}"/>
                        <label style="margin-left: 50px;">合同编号：</label>
                        <input type="text" class="input_text input3" name="project_number" id="project_number" value="{{$project_number??''}}"/>
                    </div>
                    <div class="two_btn_new">
                        <input type="submit" value="检索" class="btn search_btn2"/>
                        <input type="button" value="所有" class="btn search_btn2" onclick="window.location.href='/withdraw/index'"/>
                        <input type="button" value="新建" class="btn search_btn2" onclick="window.location.href='/withdraw/add'"/>

                    </div>
                     <input type="hidden" class="input_text input_key" name="page" id="" value="1"/>
                    </form>
                    <div class="list_content">
                        <div class="total_num">共有<b>{{$total}}</b>个</div>
                        <div class="the_list">
                            @foreach($list as $v)
                            <div class="one_list">
                                <p class="blue_title">
                                    <a href="/withdraw/info?info_id={{$v->id}}" target="_blank">{{$v->project_name}}</a>
                    <input type="button" value="催一下" class="btn search_btn2" onclick="window.location.href='/withdraw/press?info_id={{$v->id}}'" style="float:right"/>
                    <input type="button" value="添加" class="btn search_btn2" onclick="window.location.href='/withdraw/add?info_id={{$v->id}}'" style="float:right"/>
                                </p>
                                <div class="list_info">
                                    <label>合同编号：{{$v->contract_number}}</label>
                                    <span>|</span>
                                    <label>甲方名称：{{$v->party_a_name}}</label>
                                    <span>|</span>
                                    <label>项目经理：{{$v->project_manager}}</label>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <div class="flip">
                                {{$pages}}
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="bottom_line"></div>
        </div>
    </div>
</div>
@stop

