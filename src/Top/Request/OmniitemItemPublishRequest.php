<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniitem.item.publish request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniitemItemPublishRequest
{
	/** 
	 * 发布商品信息
	 **/
	private $lightPublishInfo;
	
	/** 
	 * 在全域商品或是门店商品中校验码是否重复，可选值对应为ALL或者STORE
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
		return "taobao.omniitem.item.publish";
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
