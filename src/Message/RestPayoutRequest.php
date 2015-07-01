<?php
/**
 * PayPal REST Payout Request
 */

namespace Omnipay\PayPal\Message;

/**
 * PayPal REST Payout Request
 */

class RestPayoutRequest extends AbstractRestRequest
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
        return parent::getEndpoint() . '/payments/payouts?sync_mode=true';
    }


    public function getSenderBatchHeader()
    {
        return $this->getParameter('sender_batch_header');
    }

    public function setSenderBatchHeader($value)
    {
        return $this->setParameter('sender_batch_header', $value);
    }

    public function getItems()
    {
        return $this->getParameter('items');
    }

    public function setItems($value)
    {
        return $this->setParameter('items', $value);
    }
}
