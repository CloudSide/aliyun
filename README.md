Aliyun-SDK
====

[![Latest Stable Version](https://img.shields.io/packagist/v/cloudmario/hehe-aliyun.svg)](https://packagist.org/packages/cloudmario/hehe-aliyun)
[![Latest Stable Version](https://img.shields.io/packagist/vpre/cloudmario/hehe-aliyun.svg)](https://packagist.org/packages/cloudmario/hehe-aliyun)
[![Total Downloads](https://poser.pugx.org/cloudmario/hehe-aliyun/downloads)](https://packagist.org/packages/cloudmario/hehe-aliyun)
[![License](https://poser.pugx.org/cloudmario/hehe-aliyun/license)](https://packagist.org/packages/cloudmario/hehe-aliyun)


#### Requirements
* PHP >= 5.3.0

#### Introduction
use composer
composer.json:
```json
"require": {
	"cloudmario/hehe-aliyun": "dev-master"
}
```

#### Usage

##### 快速入门

初始化一个AliyunClient

1. 与阿里云SDK相关的文件都在aliyun文件夹下；
2. AliyunClient是与API交互的接口，SDK的操作都是通过AliyunClient完成的；
3. AliyunClient可以复用，建议设置成应用程序全局唯一的；
4. 用户可以修改类AliyunClient里的变量 $connectTimeout和$readTimeout来设置SDK调用接口的连接超时时间和读取超时时间，SDK默认的连接超时时间是3秒，读取超时时间是80秒。

```php
$c = new AliyunClient;
$c->accessKeyId = "<accessKeyId>";
$c->accessKeySecret = "<accessKeySecret>";
$c->serverUrl = "<serverUrl>";

//例如, 获取`云解析`的`records`
$req = new Dns20150109DescribeDomainRecordsRequest;
$req->setDomainName('hehe.com');
try {
	$resp = $c->execute($req);
	if ( $resp->DomainRecords ) {
		print_r($resp);
	} else {
		$code = $resp->Code;
		$message = $resp->Message;
		echo $code . " : " . $message;
	}
} catch (Exception $e) {
	print_r($e);
}
```

[![](http://service.t.sina.com.cn/widget/qmd/1656360925/02781ba4/4.png)](http://weibo.com/smcz)
