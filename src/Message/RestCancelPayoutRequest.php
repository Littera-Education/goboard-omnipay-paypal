<?php
/**
 * PayPal REST Cancel Payout Request
 */

namespace Omnipay\PayPal\Message;

/**
 * PayPal REST Payout Request
 */

class RestCancelPayoutRequest extends AbstractRestRequest
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
        return parent::getEndpoint() . '/payments/payouts-item/' . $this->getPayoutItemId() . '/cancel';
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
