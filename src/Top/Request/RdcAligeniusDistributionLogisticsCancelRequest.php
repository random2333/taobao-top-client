<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.rdc.aligenius.distribution.logistics.cancel request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class RdcAligeniusDistributionLogisticsCancelRequest
{
	/** 
	 * 参数
	 **/
	private $param0;
	
	private $apiParas = array();
	
	public function setParam0($param0)
	{
		$this->param0 = $param0;
		$this->apiParas["param0"] = $param0;
	}

	public function getParam0()
	{
		return $this->param0;
	}

	public function getApiMethodName()
	{
		return "taobao.rdc.aligenius.distribution.logistics.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
