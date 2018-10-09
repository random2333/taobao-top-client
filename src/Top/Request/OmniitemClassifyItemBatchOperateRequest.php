<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniitem.classify.item.batch.operate request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniitemClassifyItemBatchOperateRequest
{
	/** 
	 * 需要添加分类关联关系的商品ID
	 **/
	private $addItemIds;
	
	/** 
	 * 分类ID
	 **/
	private $classifyIds;
	
	/** 
	 * 需要删除分类关联关系的商品ID
	 **/
	private $deleteItemIds;
	
	/** 
	 * 操作人信息（暂时不填）
	 **/
	private $operator;
	
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

	public function setClassifyIds($classifyIds)
	{
		$this->classifyIds = $classifyIds;
		$this->apiParas["classify_ids"] = $classifyIds;
	}

	public function getClassifyIds()
	{
		return $this->classifyIds;
	}

	public function setDeleteItemIds($deleteItemIds)
	{
		$this->deleteItemIds = $deleteItemIds;
		$this->apiParas["delete_item_ids"] = $deleteItemIds;
	}

	public function getDeleteItemIds()
	{
		return $this->deleteItemIds;
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

	public function getApiMethodName()
	{
		return "taobao.omniitem.classify.item.batch.operate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->addItemIds,20,"addItemIds");
		RequestCheckUtil::checkNotNull($this->classifyIds,"classifyIds");
		RequestCheckUtil::checkMaxListSize($this->classifyIds,20,"classifyIds");
		RequestCheckUtil::checkMaxListSize($this->deleteItemIds,20,"deleteItemIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
