<?php

namespace RedeCard\Ecommerce\Entity\Enum;

use RedeCard\Ecommerce\Exception\RedeCardEcommerceException;

/**
 * Class CountryEnum
 *
 * @package RedeCard\Ecommerce\Entity\Enum
 * @author Daniel Costa <danielcosta@gmail.com>
 * @link http://unstats.un.org/unsd/methods/m49/m49alpha.htm
 */
class CountryEnum {

    /**
     * @var array
     * @link http://unstats.un.org/unsd/methods/m49/m49alpha.htm
     */
    protected static $numericalCodes = array(
        'BRA' => '076'
    );

    /**
     * Get Numerical Code for country selected by ISO ALPHA-3 Code
     *
     * @param $iso3Code
     *
     * @return string
     * @throws \RedeCard\Ecommerce\Exception\RedeCardEcommerceException
     */
    public static function getNumericalCodeByIso3Code($iso3Code)
    {
        if (isset(self::$numericalCodes[$iso3Code])) {
            return self::$numericalCodes[$iso3Code];
        }

        throw new RedeCardEcommerceException('Invalid ISO 3 country code');
    }

}