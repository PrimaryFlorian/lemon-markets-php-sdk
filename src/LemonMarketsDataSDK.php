<?php

namespace LemonMarketsSDK;

use Exception;

class LemonMarketsDataSDK extends AbstractLemon
{

    public function __construct($apiKey, $apiStatus)
    {
        $apiResource = 'data';
        parent::__construct($apiKey, $apiStatus, $apiResource);
    }

    public function getInstruments($options = NULL)
    {
        try {
            if(!is_null($options)) {
                $response = $this->httpClient->get('/v1/instruments/', [
                    'query' => $options,
                ]);
            } else {
                $response = $this->httpClient->get('/v1/instruments/');
            }
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getVenues($options = NULL)
    {
        try {
            if(!is_null($options)) {
                $response = $this->httpClient->get('/v1/venues/', [
                    'query' => $options,
                ]);
            } else {
                $response = $this->httpClient->get('/v1/venues/');
            }
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getLatestQuotes(string $isin, array $options = NULL)
    {
        try {
            if(!is_null($options)) {
                $options['isin'] = $isin;
                $response = $this->httpClient->get('/v1/quotes/latest/', [
                    'query' => $options,
                ]);
            } else {
                $response = $this->httpClient->get('/v1/quotes/latest/?isin='.$isin);
            }
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getOHLC(string $isin, string $type)
    {
        try {
            $options['isin'] = $isin;
            $response = $this->httpClient->get('/v1/ohlc/'.$type.'/', [
                'query' => $options,
            ]);
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getLatestTrades(string $isin, array $options = NULL)
    {
        try {
            if(!is_null($options)) {
                $options['isin'] = $isin;
                $response = $this->httpClient->get('/v1/trades/latest/', [
                    'query' => $options,
                ]);
            } else {
                $response = $this->httpClient->get('/v1/trades/latest/?isin='.$isin);
            }
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}