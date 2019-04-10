<?php

namespace AppBundle\Service;
// use GuzzleHttp\Client;

class GuzzleHttpClient implements HttpClientInterface
{
    private $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function get($url)
    {
        $response = $this->client->get($url);

        return json_decode($response->getBody(), true);
    }

    public function post($url, $data)
    {
        // TODO: Implement post() method.
    }
}