<?php

namespace Nestak\NiceReply;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ServerException;
use Psr\Http\Message\ResponseInterface;

/**
 * Client on communication
 */
class Client extends \GuzzleHttp\Client
{
    /**
     * Base url on nice reply API
     */
    const API_BASE_URL = 'https://api.nicereply.com/v1/';

    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge([
            'base_uri' => self::API_BASE_URL
        ], $config);

        return parent::__construct($this->config);
    }

    /**
     * @throws NiceReplyException
     */
    public function execute($method, $url, $postBody = '')
    {
        $options = [
            'auth' => [
                $this->config['username'],
                $this->config['password'],
            ]
        ];
        if ($postBody) {
            $options = array_merge(
                [
                    'body' => $postBody
                ], $options);
        }

        try {
            $response = $this->request($method, $url, $options);
        } catch (ClientException | ServerException $e) {
            throw new NiceReplyException($e->getMessage(), $e->getCode());
        } catch (GuzzleException $e) {
            throw new NiceReplyException($e->getMessage(), $e->getCode());
        }

        return $this->decodeResponse($response);
    }

    /**
     * @param ResponseInterface $response
     * @return mixed
     */
    private function decodeResponse(ResponseInterface $response)
    {
        return json_decode($response->getBody());
    }

}
