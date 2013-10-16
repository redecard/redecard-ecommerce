<?php

namespace RedeCard\Ecommerce\Entity\Transaction\CardTransaction;

/**
 * Class ThreeDSecure
 *
 * @package RedeCard\Ecommerce\Entity\Transaction\CardTransaction
 * @author Daniel Costa <daniel.costa@mobly.com.br>
 */
class ThreeDSecure {

    /**
     * ECI (Indicador de Comércio Eletrônico)
     *
     * @var string
     */
    protected $eci;

    /**
     * CAVV (Valor de Verificação de Autenticação do Titular do Cartão)
     *
     * @var string
     */
    protected $securityCode;

    /**
     * XID
     *
     * @var string
     */
    protected $transactionID;

    /**
     * @param string $eci
     */
    public function setEci($eci)
    {
        $this->eci = $eci;
        return $this;
    }

    /**
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * @param string $securityCode
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * @param string $transactionID
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

}