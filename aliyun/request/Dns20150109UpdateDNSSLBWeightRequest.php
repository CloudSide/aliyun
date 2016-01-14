<?php
/**
 * TOP API: dns.aliyuncs.com.UpdateDNSSLBWeight.2015-01-09 request
 * 
 * @author auto create
 * @since 1.0, 2015.11.16
 */
class Dns20150109UpdateDNSSLBWeightRequest
{
	/** 
	 * 解析记录ID
	 **/
	private $recordId;
	
	/** 
	 * 要修改的权重值[1-100]
	 **/
	private $weight;
	
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
	
	public function setRecordId($recordId)
	{
		$this->recordId = $recordId;
		$this->apiParas["RecordId"] = $recordId;
	}

	public function getRecordId()
	{
		return $this->recordId;
	}

	public function setWeight($weight)
	{
		$this->weight = $weight;
		$this->apiParas["Weight"] = $weight;
	}

	public function getWeight()
	{
		return $this->weight;
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
		return "dns.aliyuncs.com.UpdateDNSSLBWeight.2015-01-09";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->recordId,"recordId");
		RequestCheckUtil::checkNotNull($this->weight,"weight");
		RequestCheckUtil::checkMaxValue($this->weight,100,"weight");
		RequestCheckUtil::checkMinValue($this->weight,1,"weight");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}