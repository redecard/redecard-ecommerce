<?php

namespace RedeCard\Ecommerce\Entity\Transaction;

use RedeCard\Ecommerce\Entity\AbstractEntity;

/**
 * Class Historic
 *
 * Transações Históricas (baseada em uma transação original aprovada)
 * Os tipos de transação cancel, fulfill, são designados como Transações Históricas,
 * já que se referem às transações anteriores do e-Commerce Redecard. Todas as
 * Transações Históricas exigem o fornecimento de informações similares sobre a transação.
 *
 * @package RedeCard\Ecommerce\Entity\Transaction
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class HistoricTransaction extends AbstractEntity
{

    /**
     * Referência única fornecida pelo e-Commerce Redecard na Resposta
     * à transação original do gatewayReference.
     *
     * @var int
     */
    protected $reference;

    /**
     * Código de autorização da transação original.
     *
     * Para as solicitações fulfill, se a transação original for indicada,
     * fornecer o código de autorização recebido do banco.
     *
     * @var string
     */
    protected $authCode;

    /**
     * O tipo de transação
     *
     * @var string fulfill/cancel
     * @see RedeCard\Ecommerce\Entity\Enum\MethodEnum
     */
    protected $method;

    /**
     * @param string $authCode
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param int $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return int
     */
    public function getReference()
    {
        return $this->reference;
    }
}
