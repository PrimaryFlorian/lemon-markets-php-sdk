<?php

namespace LemonMarketsSDK;

use Exception;
use GuzzleHttp\RequestOptions;

class LemonMarketsTradingSDK extends AbstractLemon
{

    public function __construct($apiKey, $apiStatus)
    {
        $apiResource = 'trading';
        parent::__construct($apiKey, $apiStatus, $apiResource);
    }

    public function getAccount()
    {
        try {
            $response = $this->httpClient->get('/v1/account/');
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getWithdrawals($options = NULL)
    {
        try {
            if(!is_null($options)) {
                $response = $this->httpClient->get('/v1/account/withdrawals/', [
                    'query' => $options,
                ]);
            } else {
                $response = $this->httpClient->get('/v1/account/withdrawals/');
            }
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function createWithdrawal(array $options)
    {
        try {
            $response = $this->httpClient->post('/v1/account/withdrawals/', [
                RequestOptions::JSON => $options,
            ]);
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getBankstatements($options = NULL)
    {
        try {
            if(!is_null($options)) {
                $response = $this->httpClient->get('/v1/account/bankstatements/', [
                    'query' => $options,
                ]);
            } else {
                $response = $this->httpClient->get('/v1/account/bankstatements/');
            }
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getDocuments($options = NULL)
    {
        try {
            if(!is_null($options)) {
                $response = $this->httpClient->get('/v1/account/documents/', [
                    'query' => $options,
                ]);
            } else {
                $response = $this->httpClient->get('/v1/account/documents/');
            }
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getDocument(string $document_id)
    {
        try {
            $response = $this->httpClient->get('/v1/account/documents/'.$document_id);
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function createOrder(array $options)
    {
        try {
            $response = $this->httpClient->post('/v1/orders/', [
                RequestOptions::JSON => $options,
            ]);
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function activateOrder(string $order_id, string $pin)
    {
        try {
            $response = $this->httpClient->post('/v1/orders/'.$order_id.'/activate/', [
                RequestOptions::JSON => [
                    'pin' => $pin
                ],
            ]);
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getOrders($options = NULL)
    {
        try {
            if(!is_null($options)) {
                $response = $this->httpClient->get('/v1/orders/', [
                    'query' => $options,
                ]);
            } else {
                $response = $this->httpClient->get('/v1/orders/');
            }
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getOrder(string $order_id)
    {
        try {
            $response = $this->httpClient->get('/v1/orders/'.$order_id);
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteOrder($order_id)
    {
        try {
            $response = $this->httpClient->delete('/v1/orders/'.$order_id);
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getPositions($options = NULL)
    {
        try {
            if(!is_null($options)) {
                $response = $this->httpClient->get('/v1/positions/', [
                    'query' => $options,
                ]);
            } else {
                $response = $this->httpClient->get('/v1/positions/');
            }
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getStatements($options = NULL)
    {
        try {
            if(!is_null($options)) {
                $response = $this->httpClient->get('/v1/positions/statements/', [
                    'query' => $options,
                ]);
            } else {
                $response = $this->httpClient->get('/v1/positions/statements/');
            }
            return $this->decode($response);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}