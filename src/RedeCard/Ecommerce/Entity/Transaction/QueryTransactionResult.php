<?php

namespace RedeCard\Ecommerce\Entity\Transaction;

use RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card;
use RedeCard\Ecommerce\Entity\Transaction\CardTransaction\ThreeDSecure;

/**
 * Class QueryTransactionResult
 *
 * @package RedeCard\Ecommerce\Entity\Transaction
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class QueryTransactionResult
{

    /**
     * Elemento que contém detalhes do cartão utilizado
     *
     * @var CardTransaction\Card
     */
    protected $Card;

    /**
     * Elemento que contém os detalhes 3-D Secure da transação original
     * somente é fornecido quando a transação original utilizou 3-D Secure
     *
     * @var CardTransaction\ThreeDSecure
     */
    protected $ThreeDSecure;

    /**
     * Banco adquirente
     *
     * @var string
     */
    protected $acquirer;

    /**
     * Resposta de autorização do banco
     *
     * @var string
     */
    protected $authCode;

    /**
     * gatewayReference
     *
     * @var string
     */
    protected $gatewayReference;

    /**
     * Ambiente de processamento
     *
     * @var string
     */
    protected $environment;

    /**
     * Data de estorno. Apenas presente se a transação for estornada
     */
    protected $cancelDate;

    /**
     * Timestamp UNIX associado ao estorno.
     */
    protected $cancelTimestamp;

    /**
     * Data de finalização
     *
     * @var string
     */
    protected $fulfillDate;

    /**
     * UNIX timestamp associado à transação de resposta de Finalização.
     *
     * Se a transação for de 1-Estágio, somente autorização por exemplo, o campo
     * fulfillTimestamp será assinalado com o mesmo valor do campo transactionTimestamp.
     *
     * @var string
     */
    protected $fulfillTimestamp;

    /**
     * Referência do estabelecimento comercial
     *
     * @var string
     */
    protected $merchantReference;

    /**
     * Mensagem de resposta do e-Commerce Redecard.
     *
     * Para um motivo ‘duplicate transaction’ (transação duplicada), essa mensagem
     * também contém o gatewayReference da transação original, que pode ser consultada.
     *
     * @var string
     */
    protected $reason;

    /**
     * Status do envio
     *
     * Indica se a transação foi enviada para liquidação
     *
     * @var string
     */
    protected $sent;

    /**
     * Código de resposta
     *
     * @var string
     */
    protected $status;

    /**
     * Data de processamento pelo e-Commerce Redecard
     *
     * @var string
     */
    protected $transactionDate;

    /**
     * UNIX timestamp associado à resposta da transação de auth/pré.
     *
     * @var string
     */
    protected $transactionTimestamp;

    /**
     * @param CardTransaction\Card $Card
     */
    public function setCard(Card $Card)
    {
        $this->Card = $Card;
    }

    /**
     * @return CardTransaction\Card
     */
    public function getCard()
    {
        return $this->Card;
    }

    /**
     * @param CardTransaction\ThreeDSecure $ThreeDSecure
     */
    public function setThreeDSecure(ThreeDSecure $ThreeDSecure)
    {
        $this->ThreeDSecure = $ThreeDSecure;
        return $this;
    }

    /**
     * @return CardTransaction\ThreeDSecure
     */
    public function getThreeDSecure()
    {
        return $this->ThreeDSecure;
    }

    /**
     * @param string $acquirer
     */
    public function setAcquirer($acquirer)
    {
        $this->acquirer = $acquirer;
        return $this;
    }

    /**
     * @return string
     */
    public function getAcquirer()
    {
        return $this->acquirer;
    }

    /**
     * @param string $authCode
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * @param string $environment
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    public function getCancelDate()
    {
        return $this->cancelDate;
    }

    public function setCancelDate($cancelDate)
    {
        $this->cancelDate = $cancelDate;
    }

    public function getCancelTimestamp()
    {
        return $this->cancelTimestamp;
    }

    public function setCancelTimestamp($cancelTimestamp)
    {
        $this->cancelTimestamp = $cancelTimestamp;
    }

    /**
     * @param string $fulfillDate
     */
    public function setFulfillDate($fulfillDate)
    {
        $this->fulfillDate = $fulfillDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getFulfillDate()
    {
        return $this->fulfillDate;
    }

    /**
     * @param string $fulfillTimestamp
     */
    public function setFulfillTimestamp($fulfillTimestamp)
    {
        $this->fulfillTimestamp = $fulfillTimestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getFulfillTimestamp()
    {
        return $this->fulfillTimestamp;
    }

    /**
     * @param string $gatewayReference
     */
    public function setGatewayReference($gatewayReference)
    {
        $this->gatewayReference = $gatewayReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getGatewayReference()
    {
        return $this->gatewayReference;
    }

    /**
     * @param string $merchantReference
     */
    public function setMerchantReference($merchantReference)
    {
        $this->merchantReference = $merchantReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $sent
     */
    public function setSent($sent)
    {
        $this->sent = $sent;
        return $this;
    }

    /**
     * @return string
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $transactionDate
     */
    public function setTransactionDate($transactionDate)
    {
        $this->transactionDate = $transactionDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * @param string $transactionTimestamp
     */
    public function setTransactionTimestamp($transactionTimestamp)
    {
        $this->transactionTimestamp = $transactionTimestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionTimestamp()
    {
        return $this->transactionTimestamp;
    }
}
