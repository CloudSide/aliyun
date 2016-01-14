<?php
/**
 * TOP API: mts.aliyuncs.com.AddPipeline.2014-06-18 request
 * 
 * @author auto create
 * @since 1.0, 2015.09.22
 */
class Mts20140618AddPipelineRequest
{
	/** 
	 * 管道名称
	 **/
	private $name;
	
	/** 
	 * 通知配置
	 **/
	private $notifyConfig;
	
	/** 
	 * 用户授权给MTS访问MNS及OSS的角色
	 **/
	private $role;
	
	/** 
	 * 管道类型,默认Standard,范围Standard|Boost,Boost管道是一种增强管道,增 强型管道中作业的吞吐率跟响应时间都要优于标准管道中的作业,收费价格也不相 同,详见计费策略。
	 **/
	private $speed;
	
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
	
	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["Name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setNotifyConfig($notifyConfig)
	{
		$this->notifyConfig = $notifyConfig;
		$this->apiParas["NotifyConfig"] = $notifyConfig;
	}

	public function getNotifyConfig()
	{
		return $this->notifyConfig;
	}

	public function setRole($role)
	{
		$this->role = $role;
		$this->apiParas["Role"] = $role;
	}

	public function getRole()
	{
		return $this->role;
	}

	public function setSpeed($speed)
	{
		$this->speed = $speed;
		$this->apiParas["Speed"] = $speed;
	}

	public function getSpeed()
	{
		return $this->speed;
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
		return "mts.aliyuncs.com.AddPipeline.2014-06-18";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,128,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}