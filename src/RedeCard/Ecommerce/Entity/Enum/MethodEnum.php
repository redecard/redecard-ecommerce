<?php

namespace RedeCard\Ecommerce\Entity\Enum;

/**
 * Class MethodEnum
 *
 * Transaction Method Enumerator
 *
 * @package RedeCard\Ecommerce\Entity\Enum
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class MethodEnum
{

    const AUTH    = 'auth';
    const PRE     = 'pre';
    const FULFILL = 'fulfill';
    const CANCEL  = 'cancel';
    const QUERY  = 'query';
}
