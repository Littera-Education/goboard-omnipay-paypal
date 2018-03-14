<?php
/**
 * PayPal REST Balance Request
 */

namespace Omnipay\PayPal\Message;

/**
 * PayPal REST Balance Request
 */

class RestBalanceRequest extends AbstractRestRequest
{
    public function getData()
    {
        $data = $this->getParameters();
/*
        unset ($data["clientId"]);
        unset ($data["secret"]);
        unset ($data["token"]);
        unset ($data["testMode"]);
*/
        return $data;
    }

	protected function getHttpMethod()
    {
        return 'GET';
    }
	
    public function getEndpoint()
    {
        return parent::getEndpoint() . '/wallet/balance-accounts';
		//$base = $this->getTestMode() ? $this->testEndpoint : $this->liveEndpoint;
        //return $base . '/v1/wallet/balance-accounts';
    }
    
}
