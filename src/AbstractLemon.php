<?php

namespace LemonMarketsSDK;

use GuzzleHttp\Client as GuzzeClient;

abstract class AbstractLemon
{

    public function __construct(protected $apiKey, protected $apiResource, protected $apiStatus) {
        $this->httpClient = $httpClient ?? $this->createGuzzeClient();
    }

    private function createGuzzeClient(): GuzzeClient
    {
        $client = new GuzzeClient([
            'base_uri' => 'https://'.$this->apiResource.$this->apiStatus.'.lemon.markets',
            'timeout' => 2.0,
            'headers' => [
              'Authorization' => 'Bearer '.$this->apiKey,
            ],
        ]);

        return $client;

    }

    public function decode($json)
    {
        return json_decode($json->getBody()->getContents(), true);
    }

}
