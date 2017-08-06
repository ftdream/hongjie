<?php

namespace HongeGroup\Http\Controllers;

class Consts
{
    const SUCCESS = 0;
    const ERROR = 90000;

    const TOKEN_INVALID = 5000;

    const VERIFYCODE_SEND_FAILURE = 10001;
    const VERIFYCODE_NO_SAME_SEND = 10002;
    const VERIFY_MOBILE_ERROR = 10003;
    const RATE_EXCEED_LIMIT = 10004;
    const PLATFORM_NOT_EMPTY = 10005;
    const USER_NOT_EXIST = 10006;
    const VERIFY_CODE_ERROR = 10007;
    const VERIFY_CODE_INVALID = 10008;
    const USER_ALREADY_EXISTS = 10009;
    const USER_NAME_ERROR = 10010;
    const USER_GENDER_ERROR = 10011;
    const USER_TYPE_ERROR = 10012;
    const DOCTOR_TEAM_NOT_EXISTS = 10013;
    const COMPANY_NOT_EXISTS = 10014;
    const MOBILE_ALREADY_EXISTS = 10015;
    const CITIES_TYPE_ERROR = 10016;
    const COMPANY_NAME_EXITS = 10017;
    const USER_TYPE_NOT_PATIENT = 10018;
    const USER_PASSWORD_EMPTY = 10019;
    const BAD_REQUEST = 10020;
    const USER_OR_PASSWORD_ERROR = 10021;


    //企业
    const COMPANY_NAME_NOT_NULL = 10022;
    const COMPANY_ADDRESS_NOT_NULL = 10023;
    const COMPANY_COORDINATOR_NOT_NULL = 10024;
    const COMPANY_PHONE_NOT_NULL = 10025;
    //医生团队
    const TEAM_NAME_NOT_NULL = 10026;
    const TEAM_ADDRESS_NOT_NULL = 10027;
    const TEAM_NAME_EXITS = 10028;

    const MA_NOT_EXISTS = 10029;
    const DOCTOR_NOT_EXISTS =10030;
    const PATIENT_NOT_EXISTS = 10031;
    const PA_NOT_EXISTS = 10032;
    const USER_NAME_RULES = 10033;
    const PASSWORD_RULES = 10034;

    //团队和医生关系表
    const TEAM_DOCTOR_NOT_REF = 10035;
    const TEAM_DOCTOR_HAS_REF = 10036;
    const TEMPLATE_NOT_EXISTS = 10037;
    //医生表
    const DOCTOR_IDENTITY_NOT_EXISTS = 10038;
    const DOCTOR_LEVEL_NOT_EXISTS = 10040;
    const MUST_BE_NUMBER = 10041;

    //用户和医生关系表
    const USER_DOCTOR_NOT_REF = 10042;
    const USER_DOCTOR_HAS_REF = 10043;
    const BOOKING_TIME_NOT_NULL = 10044;
    const SERVICE_TYPE_ERROR = 10045;
    //档案分享
    const SHARE_CODE_ERROR = 10046;
    const SHARE_CODE_EXPIRED = 10047;
    const HEALTH_RECORD_NOT_EXIT = 10048;
    const USER_NOT_HEALTH_RECORD = 10049;

    //微信
    const USER_BIND_ERROR = 10050;
    const USER_NO_INFO = 10055;
    const USER_NO_TEAM = 10056;

    //评论
    const COMMENT_CODE_ERROR = 10051;
    const COMMENT_BOOKING_CODE_ERROR = 10052;
    const COMMENT_ALREADY_ERROR = 10053;
    const COMMENT_EMPTY_ERROR = 10054;

    const CODE_DESC = [
        self::SUCCESS => '操作成功',
        self::ERROR => '系统错误',
        self::TOKEN_INVALID => 'token已经失效',
        self::VERIFYCODE_SEND_FAILURE => '验证码发送失败',
        self::VERIFYCODE_NO_SAME_SEND => '同一个手机号在有限时间里不能再发送验证码',
        self::VERIFY_MOBILE_ERROR => '请输入正确的手机号',
        self::RATE_EXCEED_LIMIT => '请求太过频繁，请稍后再试',
        self::PLATFORM_NOT_EMPTY => '手机或验证码不可为空',
        self::USER_NOT_EXIST => '该用户不存在',
        self::VERIFY_CODE_ERROR => '验证码不正确',
        self::VERIFY_CODE_INVALID => '验证码失效',
        self::USER_ALREADY_EXISTS => '用户已经存在',
        self::USER_NAME_ERROR => '用户姓名不能为空',
        self::USER_GENDER_ERROR => '不存在此性别类型',
        self::USER_TYPE_ERROR => '不存在此用户类型',
        self::DOCTOR_TEAM_NOT_EXISTS => '此医生团队不存在',
        self::COMPANY_NOT_EXISTS => '企业不存在',
        self::MOBILE_ALREADY_EXISTS => '该手机号已经存在',
        self::CITIES_TYPE_ERROR => '该城市类型不对',
        self::COMPANY_NAME_EXITS => '企业用户名存在',
        self::USER_TYPE_NOT_PATIENT => '不是患者用户',
        self::USER_PASSWORD_EMPTY => '用户名或密码不能为空',
        self::BAD_REQUEST => '400 bad request',
        self::USER_OR_PASSWORD_ERROR => '用户名或者密码错误',
        self::COMPANY_NAME_NOT_NULL => '企业名字不可为空',
        self::COMPANY_ADDRESS_NOT_NULL => '企业地址不可为空',
        self::COMPANY_COORDINATOR_NOT_NULL => '企业协议联系人不可为空',
        self::COMPANY_PHONE_NOT_NULL => '企业电话不可为空',
        self::TEAM_NAME_NOT_NULL => '医生团队名字不可为空',
        self::TEAM_ADDRESS_NOT_NULL => '医生团队地址不可为空',
        self::TEAM_NAME_EXITS => '医生团队名字已经存在',
        self::MA_NOT_EXISTS => 'MA不存在',
        self::DOCTOR_NOT_EXISTS => '医生不存在',
        self::PATIENT_NOT_EXISTS => '患者不存在',
        self::PA_NOT_EXISTS => 'PA不存在',
        self::TEAM_DOCTOR_NOT_REF => '该团队和该医生没有绑定关系,无法解绑',
        self::TEAM_DOCTOR_HAS_REF => '该团队和该医生已经绑定关系,无法再次绑定',
        self::USER_NAME_RULES => '支持数字、字母、符号，区分大小写,且长度在2和255之间',
        self::PASSWORD_RULES => '数字、字母、符号，区分大小写,且长度在6和40之间',
        self::TEMPLATE_NOT_EXISTS => '模板不存在',
        self::DOCTOR_IDENTITY_NOT_EXISTS => '医生身份不存在',
        self::DOCTOR_LEVEL_NOT_EXISTS => '该医生职称不存在',
        self::MUST_BE_NUMBER => '必须为正整数',
        self::USER_DOCTOR_NOT_REF => '该用户和该医生没有绑定关系,无法解绑',
        self::USER_DOCTOR_HAS_REF => '该用户和该医生已经绑定关系,无法再次绑定',
        self::BOOKING_TIME_NOT_NULL => '预约时间不可为空',
        self::SERVICE_TYPE_ERROR => '服务类型不正确',
        self::SHARE_CODE_ERROR => '分享码错误',
        self::SHARE_CODE_EXPIRED => '该分享已经过期',
        self::HEALTH_RECORD_NOT_EXIT => '健康档案不存在',
        self::USER_NOT_HEALTH_RECORD => '该档案不属于该患者',
        self::USER_BIND_ERROR => '该微信账号已经绑定其他手机号了',
        self::COMMENT_CODE_ERROR => '该服务不存在',
        self::COMMENT_BOOKING_CODE_ERROR => '该服务未提供',
        self::COMMENT_ALREADY_ERROR => '您已经添加过点评了',
        self::COMMENT_EMPTY_ERROR => '点评内容不能为空',
        self::USER_NO_INFO => '请联系客服咨询购买套餐服务，客服电话：400-686-9900',
        self::USER_NO_TEAM => '请联系客服绑定医生团队，客服电话：400-686-9900'
    ];
}
