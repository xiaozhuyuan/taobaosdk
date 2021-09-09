<?php
/**
 * TOP API: taobao.trade.fullinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2021.09.09
 */
class TradeFullinfoGetRequest
{
	/** 
	 * 需要返回的字段列表，多个字段用半角逗号分隔，可选值为返回示例中能看到的所有字段。
	 **/
	private $fields;
	
	/** 
	 * appkey未对接oaid加密，则忽略该字段。对接oaid加密情况下，（收货人+手机号+座机+收货地址+create）5个字段组合成oaid，原始订单上座机为空也满足条件。传true，代表必须返回oaid，生成不了就报isv.oaid-field-miss错误；默认或者传false，满足生成条件则返回oaid，否则为空
	 **/
	private $includeOaid;
	
	/** 
	 * 交易编号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setIncludeOaid($includeOaid)
	{
		$this->includeOaid = $includeOaid;
		$this->apiParas["include_oaid"] = $includeOaid;
	}

	public function getIncludeOaid()
	{
		return $this->includeOaid;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.fullinfo.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
		RequestCheckUtil::checkMaxValue($this->tid,9223372036854775807,"tid");
		RequestCheckUtil::checkMinValue($this->tid,1,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
