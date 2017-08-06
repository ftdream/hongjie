<?php

declare(strict_types=1);

namespace HongeGroup\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;
use HongeGroup\Models\User;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	protected function output(int $errorCode, $content='', $message='')
	{
		$msg = Consts::CODE_DESC;
		$msg = $msg[$errorCode];
		if ($errorCode == 0)
		{
			$retArr = [
				"code" => $errorCode,
				"message" =>$msg
					];
			if(!empty($content))
			{
				$retArr["data"] = $content;
			}
		}
		else
		{
			$retArr =  [
				"code" => $errorCode,
				"message" => $msg
					];
		}
		if(!empty($message))
		{
			$retArr["message"] = $message;
		}

		return json_encode($retArr, JSON_UNESCAPED_UNICODE);
	}

	protected function verifyUser($user_id)
	{
		$user = User::where('id', $user_id)
			->where('status', User::STATUS_NORMAL)->first();
		return is_null($user);
	}

	/**
	 * 查看请求的参数是否是全
	 * @return true 请求参数全
	 *         false 请求参数不全
	 */
	protected function hasEnoughHttpParameters(array $httpParameters, array $requestList)
	{
		foreach($httpParameters as $elem)
		{
			if(!isset($requestList[$elem]))
			{
				return false;
			}
		}
		return true;
	}

	/**
	 * 通过laravel自带的服务来进行参数校验
	 * @return instance 有错误就返回错误列表的第一条错误的信息
	 *         null     如果为空就说明参数校验都正确
	 */
	protected function validateRequestParams(array $requestList, array $validateList, array $errorMessage = array())
	{
		$validator = Validator::make($requestList, $validateList, $errorMessage);
		if($validator->fails())
		{
			return $validator->errors()->first();
		}

		return null;
	}

}
