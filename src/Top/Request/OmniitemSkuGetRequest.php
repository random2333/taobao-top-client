<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniitem.sku.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniitemSkuGetRequest
{
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * skuId
	 **/
	private $skuId;
	
	/** 
	 * sku商家编码
	 **/
	private $skuOuterId;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function setSkuOuterId($skuOuterId)
	{
		$this->skuOuterId = $skuOuterId;
		$this->apiParas["sku_outer_id"] = $skuOuterId;
	}

	public function getSkuOuterId()
	{
		return $this->skuOuterId;
	}

	public function getApiMethodName()
	{
		return "taobao.omniitem.sku.get";
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
