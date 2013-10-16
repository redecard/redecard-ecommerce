<?php

namespace RedeCard\Ecommerce\Entity;

use RedeCard\Ecommerce\Entity\Authentication;
use RedeCard\Ecommerce\Entity\Transaction;

/**
 * Class Request
 *
 * @package RedeCard\Ecommerce\Entity
 * @author Daniel Costa <daniel.costa@mobly.com.br>
 */
class Request extends AbstractEntity {

    /**
     * @var int
     */
    protected $version = 2;

    /**
     * @var Authentication
     */
    protected $Authentication;

    /**
     * @var Transaction
     */
    protected $Transaction;

    /**
     * @param Authentication $authentication
     */
    public function __construct(Authentication $authentication)
    {
        $this->Authentication = $authentication;
        return $this;
    }

    /**
     * @param Authentication $Authentication
     */
    public function setAuthentication(Authentication $Authentication)
    {
        $this->Authentication = $Authentication;
        return $this;
    }

    /**
     * @return Authentication
     */
    public function getAuthentication()
    {
        return $this->Authentication;
    }

    /**
     * @param Transaction $Transaction
     */
    public function setTransaction(Transaction $Transaction)
    {
        $this->Transaction = $Transaction;
        return $this;
    }

    /**
     * @return Transaction
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }

    /**
     * @param int $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

}