<?php
/**
 * PayPal REST Payout Request
 */

namespace Omnipay\PayPal\Message;

/**
 * PayPal REST Payout Request
 */

class RestPayoutDetailsRequest extends AbstractRestRequest
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


    protected function getHttpMethod()
    {
        return 'GET';
    }


    public function getEndpoint()
    {
        return parent::getEndpoint() . '/payments/payouts-item/' . $this->getPayoutItemId();
    }


    public function getPayoutItemId()
    {
        return $this->getParameter('payout_item_id');
    }

    public function setPayoutItemId($value)
    {
        return $this->setParameter('payout_item_id', $value);
    }
}
