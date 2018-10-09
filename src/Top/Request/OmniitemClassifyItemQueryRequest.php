<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniitem.classify.item.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniitemClassifyItemQueryRequest
{
	/** 
	 * 分类ID
	 **/
	private $classifyId;
	
	/** 
	 * 页码
	 **/
	private $pageNum;
	
	/** 
	 * 每页大小
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setClassifyId($classifyId)
	{
		$this->classifyId = $classifyId;
		$this->apiParas["classify_id"] = $classifyId;
	}

	public function getClassifyId()
	{
		return $this->classifyId;
	}

	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "taobao.omniitem.classify.item.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->classifyId,"classifyId");
		RequestCheckUtil::checkNotNull($this->pageNum,"pageNum");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
