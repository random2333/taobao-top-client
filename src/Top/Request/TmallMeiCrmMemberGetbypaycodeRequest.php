<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: tmall.mei.crm.member.getbypaycode request
 * 
 * @author auto create
 * @since 1.0, 2018.09.18
 */
class TmallMeiCrmMemberGetbypaycodeRequest
{
	/** 
	 * 会员码
	 **/
	private $payCode;
	
	private $apiParas = array();
	
	public function setPayCode($payCode)
	{
		$this->payCode = $payCode;
		$this->apiParas["pay_code"] = $payCode;
	}

	public function getPayCode()
	{
		return $this->payCode;
	}

	public function getApiMethodName()
	{
		return "tmall.mei.crm.member.getbypaycode";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->payCode,"payCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
