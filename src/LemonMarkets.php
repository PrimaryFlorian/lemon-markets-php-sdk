<?php

namespace LemonMarketsSDK;

class LemonMarkets
{

    public function __construct(protected $apiKey, protected $apiStatus)
    {
        $this->data = new LemonMarketsDataSDK($this->apiKey, $this->apiStatus);
        $this->trading = new LemonMarketsTradingSDK($this->apiKey, $this->apiStatus);
    }

}