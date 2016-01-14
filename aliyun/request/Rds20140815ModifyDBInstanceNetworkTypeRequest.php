<?php
/**
 * TOP API: rds.aliyuncs.com.ModifyDBInstanceNetworkType.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2015.03.25
 */
class Rds20140815ModifyDBInstanceNetworkTypeRequest
{
	/** 
	 * 实例名，可以一次输入多个，以英文半角“,”分隔
	 **/
	private $dBInstanceId;
	
	/** 
	 * VPC：VPC实例
Classic：Classic实例
	 **/
	private $instanceNetworkType;
	
	/** 
	 * PrivateIpAddress
	 **/
	private $privateIpAddress;
	
	/** 
	 * VPC ID
	 **/
	private $vPCId;
	
	/** 
	 * VSwitch ID
	 **/
	private $vSwitchId;
	
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
	
	public function setdBInstanceId($dBInstanceId)
	{
		$this->dBInstanceId = $dBInstanceId;
		$this->apiParas["DBInstanceId"] = $dBInstanceId;
	}

	public function getdBInstanceId()
	{
		return $this->dBInstanceId;
	}

	public function setInstanceNetworkType($instanceNetworkType)
	{
		$this->instanceNetworkType = $instanceNetworkType;
		$this->apiParas["InstanceNetworkType"] = $instanceNetworkType;
	}

	public function getInstanceNetworkType()
	{
		return $this->instanceNetworkType;
	}

	public function setPrivateIpAddress($privateIpAddress)
	{
		$this->privateIpAddress = $privateIpAddress;
		$this->apiParas["PrivateIpAddress"] = $privateIpAddress;
	}

	public function getPrivateIpAddress()
	{
		return $this->privateIpAddress;
	}

	public function setvPCId($vPCId)
	{
		$this->vPCId = $vPCId;
		$this->apiParas["VPCId"] = $vPCId;
	}

	public function getvPCId()
	{
		return $this->vPCId;
	}

	public function setvSwitchId($vSwitchId)
	{
		$this->vSwitchId = $vSwitchId;
		$this->apiParas["VSwitchId"] = $vSwitchId;
	}

	public function getvSwitchId()
	{
		return $this->vSwitchId;
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
		return "rds.aliyuncs.com.ModifyDBInstanceNetworkType.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->instanceNetworkType,"instanceNetworkType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}