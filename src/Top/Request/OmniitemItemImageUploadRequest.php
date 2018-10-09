<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniitem.item.image.upload request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniitemItemImageUploadRequest
{
	/** 
	 * 条形码
	 **/
	private $barCode;
	
	/** 
	 * 商品图片信息，允许png、jpg、gif图片格式,3M以内
	 **/
	private $img;
	
	/** 
	 * 商品ID，若填入商品ID则以商品ID为准，否则以outerId/barCode为准
	 **/
	private $itemId;
	
	/** 
	 * 是否为主图
	 **/
	private $major;
	
	/** 
	 * 商品outerId
	 **/
	private $outerId;
	
	/** 
	 * 图片顺序
	 **/
	private $position;
	
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

	public function setImg($img)
	{
		$this->img = $img;
		$this->apiParas["img"] = $img;
	}

	public function getImg()
	{
		return $this->img;
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

	public function setMajor($major)
	{
		$this->major = $major;
		$this->apiParas["major"] = $major;
	}

	public function getMajor()
	{
		return $this->major;
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

	public function setPosition($position)
	{
		$this->position = $position;
		$this->apiParas["position"] = $position;
	}

	public function getPosition()
	{
		return $this->position;
	}

	public function getApiMethodName()
	{
		return "taobao.omniitem.item.image.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->img,"img");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
