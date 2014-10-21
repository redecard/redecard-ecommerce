<?php

namespace RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card;

use RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs\ExtendedPolicy;

/**
 * Class Cv2Avs
 *
 * @package RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class Cv2Avs {

    /**
     * O endereço da fatura (exceto o CEP) do cliente.
     *
     * @var string
     */
    protected $streetAddress1;

    /**
     * O endereço da fatura (exceto o CEP) do cliente.
     *
     * @var string
     */
    protected $streetAddress2;

    /**
     * O endereço da fatura (exceto o CEP) do cliente.
     *
     * @var string
     */
    protected $streetAddress3;

    /**
     * O endereço da fatura (exceto o CEP) do cliente.
     *
     * @var string
     */
    protected $streetAddress4;

    /**
     * A cidade da fatura
     *
     * @var string Deve ser alfanumérico
     */
    protected $city;

    /**
     * O estado da fatura
     *
     * @var string Deve ser alfanumérico
     */
    protected $stateProvince;

    /**
     * O país da fatura
     *
     * @var string Utilize os códigos numéricos de país
     */
    protected $country;

    /**
     * O CEP da fatura.
     *
     * @var string Um máximo de 9 caracteres alfanuméricos.
     */
    protected $postCode;

    /**
     * Número de CPF do consumidor
     *
     * @var string
     */
    protected $cpf;

    /**
     * O número CV2 do cartão.
     *
     * @var string Deve ter 3 dígitos para todos os tipos de C cartão.
     */
    protected $cv2;

    /**
     * A Política Padrão necessária para a transação.
     *
     * @var int 1, 2, 3, 5, 6, 7. Consulte a tabela a seguir para obter as definições.
     */
    protected $policy;

    /**
     * Somente para utilização com a Política Estendida. Consulte a seção 2.3.1.2.
     *
     * @var ExtendedPolicy
     */
    protected $ExtendedPolicy;

    /**
     * @param ExtendedPolicy $ExtendedPolicy
     */
    public function setExtendedPolicy(ExtendedPolicy $ExtendedPolicy)
    {
        $this->ExtendedPolicy = $ExtendedPolicy;
        return $this;
    }

    /**
     * @return ExtendedPolicy
     */
    public function getExtendedPolicy()
    {
        return $this->ExtendedPolicy;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param string $cv2
     */
    public function setCv2($cv2)
    {
        $this->cv2 = $cv2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCv2()
    {
        return $this->cv2;
    }

    /**
     * @param int $policy
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
     * @param string $postcode
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param string $stateProvince
     */
    public function setStateProvince($stateProvince)
    {
        $this->stateProvince = $stateProvince;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateProvince()
    {
        return $this->stateProvince;
    }

    /**
     * @param string $streetAddress1
     */
    public function setStreetAddress1($streetAddress1)
    {
        $this->streetAddress1 = $streetAddress1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress1()
    {
        return $this->streetAddress1;
    }

    /**
     * @param string $streetAddress2
     */
    public function setStreetAddress2($streetAddress2)
    {
        $this->streetAddress2 = $streetAddress2;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress2()
    {
        return $this->streetAddress2;
    }

    /**
     * @param string $streetAddress3
     */
    public function setStreetAddress3($streetAddress3)
    {
        $this->streetAddress3 = $streetAddress3;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress3()
    {
        return $this->streetAddress3;
    }

    /**
     * @param string $streetAddress4
     */
    public function setStreetAddress4($streetAddress4)
    {
        $this->streetAddress4 = $streetAddress4;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress4()
    {
        return $this->streetAddress4;
    }

}