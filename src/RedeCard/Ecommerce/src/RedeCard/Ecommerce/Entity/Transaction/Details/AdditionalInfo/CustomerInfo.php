<?php

namespace RedeCard\Ecommerce\Entity\Transaction\Details\AdditionalInfo;

/**
 * Class CustomerInfo
 * @package RedeCard\Ecommerce\Entity\Transaction\Details\AdditionalInfo
 * @author Daniel Costa <daniel.costa@mobly.com.br>
 */
class CustomerInfo {

    /**
     * Endereço de IP
     *
     * @var string Deve ser um endereço de IP válido
     */
    protected $customerIpAddress;

    /**
     * @param string $customerIpAddress
     */
    public function setCustomerIpAddress($customerIpAddress)
    {
        $this->customerIpAddress = $customerIpAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerIpAddress()
    {
        return $this->customerIpAddress;
    }

}