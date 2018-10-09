<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniitem.classify.store.batch.operate request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniitemClassifyStoreBatchOperateRequest
{
	/** 
	 * 需要添加的分类ID
	 **/
	private $addCategoryIds;
	
	/** 
	 * 操作信息（暂时不填）
	 **/
	private $operator;
	
	/** 
	 * 需要删除的分类ID
	 **/
	private $removeCategoryIds;
	
	/** 
	 * 商家门店ID
	 **/
	private $storeIds;
	
	private $apiParas = array();
	
	public function setAddCategoryIds($addCategoryIds)
	{
		$this->addCategoryIds = $addCategoryIds;
		$this->apiParas["add_category_ids"] = $addCategoryIds;
	}

	public function getAddCategoryIds()
	{
		return $this->addCategoryIds;
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

	public function setRemoveCategoryIds($removeCategoryIds)
	{
		$this->removeCategoryIds = $removeCategoryIds;
		$this->apiParas["remove_category_ids"] = $removeCategoryIds;
	}

	public function getRemoveCategoryIds()
	{
		return $this->removeCategoryIds;
	}

	public function setStoreIds($storeIds)
	{
		$this->storeIds = $storeIds;
		$this->apiParas["store_ids"] = $storeIds;
	}

	public function getStoreIds()
	{
		return $this->storeIds;
	}

	public function getApiMethodName()
	{
		return "taobao.omniitem.classify.store.batch.operate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->addCategoryIds,20,"addCategoryIds");
		RequestCheckUtil::checkMaxListSize($this->removeCategoryIds,20,"removeCategoryIds");
		RequestCheckUtil::checkNotNull($this->storeIds,"storeIds");
		RequestCheckUtil::checkMaxListSize($this->storeIds,20,"storeIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
