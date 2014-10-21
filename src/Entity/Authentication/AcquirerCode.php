<?php

namespace RedeCard\Ecommerce\Entity\Authentication;

use RedeCard\Ecommerce\Entity\AbstractEntity;
use RedeCard\Ecommerce\Exception\InvalidArgumentException;

/**
 * Class AcquirerCode
 *
 * Allows an establishment to use the identification number assigned by the acquirer.
 * This feature is limited based on the customer-premises.
 *
 * @package RedeCard\Ecommerce\Entity\Authentication
 * @author Daniel Costa <danielcosta@gmail.com>
 * @link http://goo.gl/Mtv5l3
 * @section 2.1.1.1.2 AcquirerCode
 */
class AcquirerCode extends AbstractEntity
{
    /**
     * Identification number of the establishment assigned by the purchaser
     *
     * @var int $rdcdPv 9 digits
     */
    protected $rdcdPv;

    /**
     * @param $rdcdPv
     * @throws InvalidArgumentException
     */
    public function __construct($rdcdPv)
    {
        $this->setRdcdPv($rdcdPv);
        return $this;
    }

    /**
     * @param $rdcdPv
     * @return AcquirerCode
     * @throws InvalidArgumentException
     */
    public function setRdcdPv($rdcdPv)
    {
        if (strlen((int) $rdcdPv) != 9) {
            throw new InvalidArgumentException('rdcd_pv should be a 9 digit integer, ' . gettype($rdcdPv) . 'passed.');
        }

        $this->rdcdPv = (int) $rdcdPv;
        return $this;
    }

    /**
     * @return int
     */
    public function getRdcdPv()
    {
        return $this->rdcdPv;
    }
}
