<?php

namespace RedeCard\Ecommerce\Entity\Transaction\Details;

use RedeCard\Ecommerce\Entity\Transaction\Details\AdditionalInfo\CustomerInfo;

/**
 * Class AdditionalInfo
 * @package RedeCard\Ecommerce\Entity\Transaction\Details
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class AdditionalInfo
{
    /**
     * @var string
     */
    protected $addendumData;

    /**
     * @var string S/N
     */
    protected $riskBypass;

    /**
     * @var CustomerInfo
     */
    protected $CustomerInfo;

    /**
     * @param CustomerInfo $CustomerInfo
     * @return $this
     */
    public function setCustomerInfo(CustomerInfo $CustomerInfo)
    {
        $this->CustomerInfo = $CustomerInfo;
        return $this;
    }

    /**
     * @return CustomerInfo
     */
    public function getCustomerInfo()
    {
        return $this->CustomerInfo;
    }

    /**
     * @param string $addendumData
     * @return $this
     */
    public function setAddendumData($addendumData)
    {
        $this->addendumData = $addendumData;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddendumData()
    {
        return $this->addendumData;
    }

    /**
     * @param string $riskBypass
     * @return $this
     */
    public function setRiskBypass($riskBypass)
    {
        $this->riskBypass = $riskBypass;
        return $this;
    }

    /**
     * @return string
     */
    public function getRiskBypass()
    {
        return $this->riskBypass;
    }
}
