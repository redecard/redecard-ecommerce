<?php

namespace RedeCard\Ecommerce\Entity\Enum;

/**
 * Class AuthenticationTypeEnum
 * @package RedeCard\Ecommerce\Entity\Enum
 * @author Daniel Costa <daniel.costa@mobly.com.br>
 */
class AuthenticationTypeEnum {

    /**
     * Este método usa uma instância de Authentication\AcquirerCode como parâmetro de autenticação
     */
    const ACQUIRER = 1;

    /**
     * Este método usa apenas um Client id como parâmetro de autenticação
     */
    const CLIENT = 2;

}