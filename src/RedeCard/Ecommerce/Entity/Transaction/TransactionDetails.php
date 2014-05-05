<?php

namespace RedeCard\Ecommerce\Entity\Transaction;

use RedeCard\Ecommerce\Entity\AbstractEntity;
use RedeCard\Ecommerce\Entity\Transaction\TransactionDetails\Amount;
use RedeCard\Ecommerce\Entity\Transaction\TransactionDetails\Installments;

/**
 * Class Details
 * @package RedeCard\Ecommerce\Entity\Transaction
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class TransactionDetails extends AbstractEntity
{
    /**
     * Número de referência único para cada transação
     *
     * Mínimo de 6 e máximo de 30 caracteres alfanuméricos. Deve ser único.
     *
     * @var string
     */
    protected $merchantReference;

    /**
     * Valor da transação
     *
     * @var Amount
     */
    protected $Amount;

    /**
     * Elementos das Parcelas
     *
     * @var Installments
     */
    protected $Installments;

    /**
     * Especifica o ambiente da transação.
     *
     * Mandatório para o setup de estabelecimentos para suportar múltiplos ambientes.
     *
     * cont_auth se aplica a estabelecimentos que suportam Transações Recorrentes
     * conforme detalhado no Guia de Referência dos Desenvolvedores do
     * e-Commerce Redecard, Anexo 2: Pagamentos Recorrentes.

     * @var string ecomm/cont_auth
     * @see RedeCard\Ecommerce\Entity\Enum\CaptureMethodEnum
     */
    protected $captureMethod;

    /**
     * @param Amount $amount
     */
    public function setAmount(Amount $Amount)
    {
        $this->Amount = $Amount;
    }

    /**
     * @return Amount
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param Installments $Installments
     */
    public function setInstallments($Installments)
    {
        $this->Installments = $Installments;
    }

    /**
     * @return Installments
     */
    public function getInstallments()
    {
        return $this->Installments;
    }

    /**
     * @param string $capturemethod
     */
    public function setCaptureMethod($captureMethod)
    {
        $this->captureMethod = $captureMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getCaptureMethod()
    {
        return $this->captureMethod;
    }

    /**
     * @param string $merchantreference
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

}
