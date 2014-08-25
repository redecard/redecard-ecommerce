<?php

namespace RedeCard\Ecommerce\Entity;

use RedeCard\Ecommerce\Entity\AbstractEntity;
use RedeCard\Ecommerce\Entity\Transaction\CardTransactionResult;
use RedeCard\Ecommerce\Entity\Transaction\QueryTransactionResult;

/**
 * Class Response
 *
 * @package RedeCard\Ecommerce\Entity
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class Response extends AbstractEntity
{

    /**
     * Código numérico de retorno que indica o resultado da transação
     *
     * @var int
     */
    protected $status;

    /**
     * Um campo de texto que expande o status da transação
     *
     * @var string
     */
    protected $reason;

    /**
     * A referência da transação fornecida pelo e-Commerce Redecard.
     *
     * @var string
     */
    protected $gatewayReference;

    /**
     * O Registro de Data e Hora Unix correspondente ao momento de
     * entrada da transação no servidor do e-Commerce Redecard.
     *
     * @var int
     */
    protected $time;

    /**
     * Indica o status atual de sua conta: LIVE, TEST ou ACCREDITATION.
     *
     * @var string
     */
    protected $mode;

    /* Os elementos adicionais a seguir também podem ser exibidos dependendo do resultado da transação: */

    /**
     * Se for gerado um erro, podem ser exibidas informações
     * adicionais para permitir a identificação da fonte do erro.
     *
     * @var string
     */
    protected $information;

    /**
     * Seu número de referência.
     *
     * @var int
     */
    protected $merchantReference;

    /**
     * Número de referência da transação atribuído pelo adquirente
     * (não disponível para integração de todos adquirentes).
     *
     * @var int
     */
    protected $authHostReference;

    /**
     * Contém o código de status obtido do host de autorização da Rede
     * @var int
     */
    protected $extendedStatus;

    /**
     * Contém a descrição do código de status obtido do host de autorização da Rede
     * @var string
     */
    protected $extendedResponseMessage;

    /**
     * @var CardTransactionResult
     */
    protected $CardTransactionResult;

    /**
     * @var QueryTransactionResult
     */
    protected $QueryTransactionResult;

    /**
     * @var QueryTransactionResult
     */
    protected $HistoricTransactionResult;

    /**
     * Banco adquirente
     *
     * @var string
     */
    protected $acquirer;

    /**
     * @param int $auth_host_reference
     */
    public function setAuthHostReference($authHostReference)
    {
        $this->authHostReference = $authHostReference;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthHostReference()
    {
        return $this->authHostReference;
    }

    /**
     * @param string $gateway_reference
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
     * @param string $information
     */
    public function setInformation($information)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @param int $merchant_reference
     */
    public function setMerchantReference($merchantReference)
    {
        $this->merchantReference = $merchantReference;
        return $this;
    }

    /**
     * @return int
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @param string $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
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
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $time
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param CardTransactionResult $CardTransaction
     */
    public function setCardTransactionResult(CardTransactionResult $CardTransactionResult)
    {
        $this->CardTransactionResult = $CardTransactionResult;
        return $this;
    }

    /**
     * @return CardTransactionResult
     */
    public function getCardTransactionResult()
    {
        return $this->CardTransactionResult;
    }

    /**
     * @param QueryTransactionResult $QueryTransactionResult
     */
    public function setQueryTransactionResult(QueryTransactionResult $QueryTransactionResult)
    {
        $this->QueryTransactionResult = $QueryTransactionResult;
        return $this;
    }

    /**
     * @return QueryTransactionResult
     */
    public function getQueryTransactionResult()
    {
        return $this->QueryTransactionResult;
    }

    /**
     * @param QueryTransactionResult $QueryTransactionResult
     */
    public function setHistoricTransactionResult(QueryTransactionResult $HistoricTransactionResult)
    {
        $this->HistoricTransactionResult = $HistoricTransactionResult;
        return $this;
    }

    /**
     * @return QueryTransactionResult
     */
    public function getHistoricTransactionResult()
    {
        return $this->HistoricTransactionResult;
    }

    public function getExtendedStatus()
    {
        return $this->extendedStatus;
    }

    public function setExtendedStatus($extendedStatus)
    {
        $this->extendedStatus = $extendedStatus;
    }

    public function getExtendedResponseMessage()
    {
        return $this->extendedResponseMessage;
    }

    public function setExtendedResponseMessage($extendedResponseMessage)
    {
        $this->extendedResponseMessage = $extendedResponseMessage;
    }

}
