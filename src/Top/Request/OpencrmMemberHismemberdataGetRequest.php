<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.opencrm.member.hismemberdata.get request
 * 
 * @author auto create
 * @since 1.0, 2018.09.17
 */
class OpencrmMemberHismemberdataGetRequest
{
	/** 
	 * 备份快照版本号（日期格式yyyyMMdd），可选参数，默认不填，则查找最近备份版本数据
	 **/
	private $backupDs;
	
	/** 
	 * 页码，必填，从1开始
	 **/
	private $currentPage;
	
	/** 
	 * 查询结束时间（记录创建时间），查询结果集超过5000000时，请增加该限制条件分时间段查询；
	 **/
	private $endTime;
	
	/** 
	 * 页面大小，必填，第几页
	 **/
	private $pageSize;
	
	/** 
	 * 查询开始时间（记录创建时间），查询结果集超过5000000时，请增加该限制条件分时间段查询；
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setBackupDs($backupDs)
	{
		$this->backupDs = $backupDs;
		$this->apiParas["backup_ds"] = $backupDs;
	}

	public function getBackupDs()
	{
		return $this->backupDs;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
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

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.opencrm.member.hismemberdata.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
