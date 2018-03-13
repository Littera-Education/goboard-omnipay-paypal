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

        unset ($data["clientId"]);
        unset ($data["secret"]);
        unset ($data["token"]);
        unset ($data["testMode"]);

        return $data;
    }

    public function getEndpoint()
    {
        return parent::getEndpoint() . '/wallet/balance-accounts';
    }
    
}
