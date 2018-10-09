<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.opencrm.member.backupversions.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OpencrmMemberBackupversionsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.opencrm.member.backupversions.get";
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
