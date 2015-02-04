<?php

namespace RedeCard\Ecommerce\Entity\Transaction\TransactionDetails;

use RedeCard\Ecommerce\Entity\AbstractEntity;

/**
 * Class Card
 *
 * @package RedeCard\Ecommerce\Entity\Transaction\CardTransaction
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class Amount extends AbstractEntity
{

    /**
     * Valor da transação
     *
     * @var float
     */
    protected $amount;

    /**
     * A moeda é transmitida em formato alfabético ISO 4217 de três caracteres (BRL)
     *
     * @var string
     */
    protected $currency;

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}
