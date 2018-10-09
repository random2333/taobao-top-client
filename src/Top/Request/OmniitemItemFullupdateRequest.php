<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniitem.item.fullupdate request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniitemItemFullupdateRequest
{
	/** 
	 * 发布商品信息
	 **/
	private $lightPublishInfo;
	
	/** 
	 * 操作类型，STORE表示门店域新增，ALL表示全域新增
	 **/
	private $operateType;
	
	private $apiParas = array();
	
	public function setLightPublishInfo($lightPublishInfo)
	{
		$this->lightPublishInfo = $lightPublishInfo;
		$this->apiParas["light_publish_info"] = $lightPublishInfo;
	}

	public function getLightPublishInfo()
	{
		return $this->lightPublishInfo;
	}

	public function setOperateType($operateType)
	{
		$this->operateType = $operateType;
		$this->apiParas["operate_type"] = $operateType;
	}

	public function getOperateType()
	{
		return $this->operateType;
	}

	public function getApiMethodName()
	{
		return "taobao.omniitem.item.fullupdate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operateType,"operateType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
