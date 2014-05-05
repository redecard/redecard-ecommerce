<?php

namespace RedeCard\Ecommerce\Entity\Enum;

/**
 * Class AuthenticationType
 * @package RedeCard\Ecommerce\Entity\Enum
 * @author Daniel Costa <daniel.costa@mobly.com.br>
 */
class AuthenticationType {

    /**
     * Este método usa uma instância de Authentication\AcquirerCode como parâmetro de autenticação
     */
    const ACQUIRER = 1;

    /**
     * Este método usa apenas um Client id como parâmetro de autenticação
     */
    const CLIENT = 2;

}