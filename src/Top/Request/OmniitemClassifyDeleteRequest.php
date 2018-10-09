<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.omniitem.classify.delete request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class OmniitemClassifyDeleteRequest
{
	/** 
	 * 分类ID
	 **/
	private $classifyId;
	
	/** 
	 * 操作人信息（暂时不填）
	 **/
	private $operator;
	
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
		return "taobao.omniitem.classify.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->classifyId,"classifyId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
