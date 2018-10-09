<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniitem.classify.operator request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniitemClassifyOperatorRequest
{
	/** 
	 * 需要添加的关联关系的商品
	 **/
	private $addItemIds;
	
	/** 
	 * 分类信息
	 **/
	private $category;
	
	/** 
	 * 操作人信息（暂时不填）
	 **/
	private $operator;
	
	/** 
	 * 需要修改的关联关系的商品
	 **/
	private $removeItemIds;
	
	private $apiParas = array();
	
	public function setAddItemIds($addItemIds)
	{
		$this->addItemIds = $addItemIds;
		$this->apiParas["add_item_ids"] = $addItemIds;
	}

	public function getAddItemIds()
	{
		return $this->addItemIds;
	}

	public function setCategory($category)
	{
		$this->category = $category;
		$this->apiParas["category"] = $category;
	}

	public function getCategory()
	{
		return $this->category;
	}

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function setRemoveItemIds($removeItemIds)
	{
		$this->removeItemIds = $removeItemIds;
		$this->apiParas["remove_item_ids"] = $removeItemIds;
	}

	public function getRemoveItemIds()
	{
		return $this->removeItemIds;
	}

	public function getApiMethodName()
	{
		return "taobao.omniitem.classify.operator";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->addItemIds,20,"addItemIds");
		RequestCheckUtil::checkMaxListSize($this->removeItemIds,20,"removeItemIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
