<?php

namespace Srmklive\PayPal\Traits\PayPalAPI;


trait Partner
{
    public function setPartnerHeader($merchantId)
    {
        $str = '{"iss" : "' . $this->config['client_id'] . '","payer_id":"' . $merchantId . '"}';
        $this->options['headers']['PayPal-Auth-Assertion'] = base64_encode('{"alg":"none"}') . "." . base64_encode($str) . ".";
        $this->options['headers']['PayPal-Partner-Attribution-Id'] = $this->config['paypal_partner_attribution_id'];
    }

    /**
     * 创建合作伙伴推荐链接
     */
    public function partnerReferrals(array $data)
    {
        $this->apiEndPoint = 'v2/customer/partner-referrals';
        $this->apiUrl = collect([$this->config['api_url'], $this->apiEndPoint])->implode('/');

        $this->options['json'] = (object)$data;

        $this->verb = 'post';

        return $this->doPayPalRequest();
    }


    /**
     * 查询合作伙伴paypal商户号merchant_id
     */
    public function getPartnerMerchantId($trackingId)
    {

        $this->apiEndPoint = "v1/customer/partners/{$this->config['self_merchant_id']}/merchant-integrations?tracking_id={$trackingId}";
        $this->apiUrl = collect([$this->config['api_url'], $this->apiEndPoint])->implode('/');
        $this->verb = 'get';
        return $this->doPayPalRequest();
    }
}
