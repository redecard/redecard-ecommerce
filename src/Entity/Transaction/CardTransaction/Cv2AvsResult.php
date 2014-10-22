<?php

namespace RedeCard\Ecommerce\Entity\Transaction\CardTransaction;

/**
 * Class Cv2AvsResult
 *
 * @package RedeCard\Ecommerce\Entity\Transaction\CardTransaction
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class Cv2AvsResult
{
    /**
     * O resultado geral da transação.
     *
     * @var string
     */
    protected $cv2AvsStatus;

    /**
     * O resultado da solicitação de estorno de transações que não cumprem a política escolhida.
     *
     * @var int 0 - falha/1 - êxito
     */
    protected $cv2AvsStatusReversal;

    /**
     * A política em relação à qual a transação foi verificada.
     *
     * @var int
     */
    protected $policy;

    /**
     * O resultado da verificação do elemento em particular.
     *
     * @var string
     */
    protected $addressResult;

    /**
     * O resultado numérico exibido pelo banco para cada elemento.
     *
     * @var int
     */
    protected $addressResultNumeric;

    /**
     * O resultado da verificação do elemento em particular.
     *
     * @var string
     */
    protected $cv2Result;

    /**
     * O resultado numérico exibido pelo banco para cada elemento.
     *
     * @var int
     */
    protected $cv2ResultNumeric;

    /**
     * O resultado da verificação do elemento em particular.
     *
     * @var string
     */
    protected $postCodeResult;

    /**
     * O resultado numérico exibido pelo banco para cada elemento.
     *
     * @var int
     */
    protected $postCodeResultNumeric;

    /**
     * O resultado da verificação do elemento em particular.
     *
     * @var string
     */
    protected $cpfResult;

    /**
     * O resultado numérico exibido pelo banco para cada elemento.
     *
     * @var int
     */
    protected $cpfResultNumeric;

    /**
     * A política em relação à qual a transação foi verificada. Possuem o mesmo formato que as Solicitações
     * consulte a seção 2.3.1
     *
     * @var string
     */
    protected $addressPolicy;

    /**
     * A política em relação à qual a transação foi verificada. Possuem o mesmo formato que as Solicitações
     * consulte a seção 2.3.1
     *
     * @var string
     */
    protected $cv2Policy;

    /**
     * A política em relação à qual a transação foi verificada. Possuem o mesmo formato que as Solicitações
     * consulte a seção 2.3.1
     *
     * @var string
     */
    protected $postCodePolicy;

    /**
     * @param string $addressPolicy
     * @return $this
     */
    public function setAddressPolicy($addressPolicy)
    {
        $this->addressPolicy = $addressPolicy;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressPolicy()
    {
        return $this->addressPolicy;
    }

    /**
     * @param string $addressResult
     * @return $this
     */
    public function setAddressResult($addressResult)
    {
        $this->addressResult = $addressResult;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressResult()
    {
        return $this->addressResult;
    }

    /**
     * @param string $cpfResult
     * @return $this
     */
    public function setCpfResult($cpfResult)
    {
        $this->cpfResult = $cpfResult;
        return $this;
    }

    /**
     * @return string
     */
    public function getCpfResult()
    {
        return $this->cpfResult;
    }

    /**
     * @param string $cv2Policy
     * @return $this
     */
    public function setCv2Policy($cv2Policy)
    {
        $this->cv2Policy = $cv2Policy;
        return $this;
    }

    /**
     * @return string
     */
    public function getCv2Policy()
    {
        return $this->cv2Policy;
    }

    /**
     * @param string $cv2Result
     * @return $this
     */
    public function setCv2Result($cv2Result)
    {
        $this->cv2Result = $cv2Result;
        return $this;
    }

    /**
     * @return string
     */
    public function getCv2Result()
    {
        return $this->cv2Result;
    }

    /**
     * @param string $cv2AvsStatus
     * @return $this
     */
    public function setCv2AvsStatus($cv2AvsStatus)
    {
        $this->cv2AvsStatus = $cv2AvsStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getCv2AvsStatus()
    {
        return $this->cv2AvsStatus;
    }

    /**
     * @param int $policy
     * @return $this
     */
    public function setPolicy($policy)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * @return int
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * @param string $postCodePolicy
     * @return $this
     */
    public function setPostCodePolicy($postCodePolicy)
    {
        $this->postCodePolicy = $postCodePolicy;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostCodePolicy()
    {
        return $this->postCodePolicy;
    }

    /**
     * @param string $postCodeResult
     * @return $this
     */
    public function setPostCodeResult($postCodeResult)
    {
        $this->postCodeResult = $postCodeResult;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostCodeResult()
    {
        return $this->postCodeResult;
    }

    /**
     * @param int $cv2AvsStatusReversal
     * @return $this
     */
    public function setCv2AvsStatusReversal($cv2AvsStatusReversal)
    {
        $this->cv2AvsStatusReversal = $cv2AvsStatusReversal;
        return $this;
    }

    /**
     * @return int
     */
    public function getCv2AvsStatusReversal()
    {
        return $this->cv2AvsStatusReversal;
    }

    /**
     * @param int $addressResultNumeric
     * @return $this
     */
    public function setAddressResultNumeric($addressResultNumeric)
    {
        $this->addressResultNumeric = $addressResultNumeric;
        return $this;
    }

    /**
     * @return int
     */
    public function getAddressResultNumeric()
    {
        return $this->addressResultNumeric;
    }

    /**
     * @param int $cpfResultNumeric
     * @return $this
     */
    public function setCpfResultNumeric($cpfResultNumeric)
    {
        $this->cpfResultNumeric = $cpfResultNumeric;
        return $this;
    }

    /**
     * @return int
     */
    public function getCpfResultNumeric()
    {
        return $this->cpfResultNumeric;
    }

    /**
     * @param int $cv2ResultNumeric
     * @return $this
     */
    public function setCv2ResultNumeric($cv2ResultNumeric)
    {
        $this->cv2ResultNumeric = $cv2ResultNumeric;
        return $this;
    }

    /**
     * @return int
     */
    public function getCv2ResultNumeric()
    {
        return $this->cv2ResultNumeric;
    }

    /**
     * @param int $postCodeResultNumeric
     * @return $this
     */
    public function setPostCodeResultNumeric($postCodeResultNumeric)
    {
        $this->postCodeResultNumeric = $postCodeResultNumeric;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostCodeResultNumeric()
    {
        return $this->postCodeResultNumeric;
    }
}
