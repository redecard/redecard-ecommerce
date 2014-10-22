<?php

namespace RedeCard\Ecommerce;

use Httpful\Request;
use Httpful\Response;

/**
 * Class Client
 *
 * @package RedeCard\Ecommerce
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class Client
{
    /**
     * @var string
     */
    protected $endpoint = 'https://scommerce.redecard.com.br/Beta/wsTransaction';

    /**
     * @var string
     */
    protected $message;

    public function __construct($endpoint = null)
    {
        if (!empty($endpoint)) {
            $this->setEndpoint($endpoint);
        }
    }

    /**
     * @param string $message
     *
     * @return Response
     */
    public function send($message = null)
    {
        if (!is_null($message)) {
            $this->setMessage($message);
        }

        /** @var Request $request */
        $request = Request::post($this->endpoint, $this->message, 'application/xml');
        return $request->withoutAutoParsing()->send();
    }

    /**
     * @param string $endpoint
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}
