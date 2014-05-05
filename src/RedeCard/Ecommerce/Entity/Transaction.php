<?php

namespace RedeCard\Ecommerce\Entity;

use RedeCard\Ecommerce\Entity\Transaction\CardTransaction;
use RedeCard\Ecommerce\Entity\Transaction\TransactionDetails;
use RedeCard\Ecommerce\Entity\Transaction\HistoricTransaction;

/**
 * Class Transaction
 *
 * @package RedeCard\Ecommerce\Entity
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class Transaction {

    /**
     * @var Transaction\CardTransaction
     */
    protected $CardTransaction;

    /**
     * @var Transaction\TransactionDetails
     */
    protected $TransactionDetails;

    /**
     * @var Transaction\HistoricTransaction
     */
    protected $HistoricTransaction;

    /**
     * @param CardTransaction $CardTransaction
     */
    public function setCardTransaction(CardTransaction $CardTransaction)
    {
        $this->CardTransaction = $CardTransaction;
        return $this;
    }

    /**
     * @return CardTransaction
     */
    public function getCardTransaction()
    {
        return $this->CardTransaction;
    }

    /**
     * @param HistoricTransaction $HistoricTransaction
     */
    public function setHistoricTransaction(HistoricTransaction $HistoricTransaction)
    {
        $this->HistoricTransaction = $HistoricTransaction;
        return $this;
    }

    /**
     * @return HistoricTransaction
     */
    public function getHistoricTransaction()
    {
        return $this->HistoricTransaction;
    }

    /**
     * @param TransactionDetails $TransactionDetails
     */
    public function setTransactionDetails(TransactionDetails $TransactionDetails)
    {
        $this->TransactionDetails = $TransactionDetails;
        return $this;
    }

    /**
     * @return TransactionDetails
     */
    public function getTransactionDetails()
    {
        return $this->TransactionDetails;
    }

}