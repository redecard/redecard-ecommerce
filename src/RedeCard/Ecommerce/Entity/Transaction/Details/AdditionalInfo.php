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
     * @param string $addendumdata
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
     * @param string $risk_bypass
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
