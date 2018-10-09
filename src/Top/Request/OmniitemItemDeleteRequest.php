<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniitem.item.delete request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniitemItemDeleteRequest
{
	/** 
	 * 条形码
	 **/
	private $barCode;
	
	/** 
	 * 商品ID，若填入则以该字段为准，否则以outerId+barcode为准
	 **/
	private $itemId;
	
	/** 
	 * 商品outerId
	 **/
	private $outerId;
	
	private $apiParas = array();
	
	public function setBarCode($barCode)
	{
		$this->barCode = $barCode;
		$this->apiParas["bar_code"] = $barCode;
	}

	public function getBarCode()
	{
		return $this->barCode;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function getApiMethodName()
	{
		return "taobao.omniitem.item.delete";
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
