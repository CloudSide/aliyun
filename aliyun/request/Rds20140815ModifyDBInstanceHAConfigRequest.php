<?php
/**
 * TOP API: rds.aliyuncs.com.ModifyDBInstanceHAConfig.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2015.08.25
 */
class Rds20140815ModifyDBInstanceHAConfigRequest
{
	/** 
	 * dbInstanceName
	 **/
	private $dbInstanceId;
	
	/** 
	 * HAMode
	 **/
	private $hAMode;
	
	/** 
	 * SyncMode
	 **/
	private $syncMode;
	
	/**
	 * 仅用于渠道商发起API调用时，指定访问的资源拥有者的ID
	 **/
	private $ownerId;
	
	/**
	 *仅用于渠道商发起API调用时，指定访问的资源拥有者的账号
	 **/
    private  $ownerAccount;
    
    /**
     *API调用者试图通过API调用来访问别人拥有但已经授权给他的资源时，
     *通过使用该参数来声明此次操作涉及到的资源是谁名下的,该参数仅官网用户可用
     **/
    private $resourceOwnerAccount;
    
	private $apiParas = array();
	
	public function setDbInstanceId($dbInstanceId)
	{
		$this->dbInstanceId = $dbInstanceId;
		$this->apiParas["DbInstanceId"] = $dbInstanceId;
	}

	public function getDbInstanceId()
	{
		return $this->dbInstanceId;
	}

	public function sethAMode($hAMode)
	{
		$this->hAMode = $hAMode;
		$this->apiParas["HAMode"] = $hAMode;
	}

	public function gethAMode()
	{
		return $this->hAMode;
	}

	public function setSyncMode($syncMode)
	{
		$this->syncMode = $syncMode;
		$this->apiParas["SyncMode"] = $syncMode;
	}

	public function getSyncMode()
	{
		return $this->syncMode;
	}

	
	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
		$this->apiParas["OwnerId"] = $ownerId;
	}
	
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	
	public function setOwnerAccount($ownerAccount)
	{
		$this->ownerAccount = $ownerAccount;
		$this->apiParas["OwnerAccount"] = $ownerAccount;
	}
	
	public function getOwnerAccount()
	{
		return $this->ownerAccount;
	}
	
	public function setResourceOwnerAccount($resourceOwnerAccount)
	{
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->apiParas["ResourceOwnerAccount"] = $resourceOwnerAccount;
	}
	
	public function getResourceOwnerAccount()
	{
		return $this->resourceOwnerAccount;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.ModifyDBInstanceHAConfig.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dbInstanceId,"dbInstanceId");
		RequestCheckUtil::checkNotNull($this->hAMode,"hAMode");
		RequestCheckUtil::checkNotNull($this->syncMode,"syncMode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}