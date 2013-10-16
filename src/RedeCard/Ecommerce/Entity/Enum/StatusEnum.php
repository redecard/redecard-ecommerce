<?php

namespace RedeCard\Ecommerce\Entity\Enum;

use RedeCard\Ecommerce\Exception\InvalidStatusException;

/**
 * Class StatusEnum
 *
 * Transaction Status Enumerator
 *
 * @package RedeCard\Ecommerce\Entity\Enum
 * @author Daniel Costa <daniel.costa@mobly.com.br>
 */
class StatusEnum {

    protected $codes = array(
        1 => 'ACCEPTED'
    );

    protected $descriptions = array(
        1 => 'Transação aceita e registrada.'
    );

    /**
     * @param $id
     *
     * @return mixed
     * @throws \RedeCard\Ecommerce\Exception\InvalidStatusException
     */
    public function getStatusByCode($id)
    {
        if (isset($this->codes[$id])) {
            return $this->codes[$id];
        }
        throw new InvalidStatusException('Invalid status code');
    }

    /**
     * @param $id
     *
     * @return mixed
     * @throws \RedeCard\Ecommerce\Exception\InvalidStatusException
     */
    public function getDescriptionByCode($id)
    {
        if (isset($this->descriptions[$id])) {
            return $this->descriptions[$id];
        }
        throw new InvalidStatusException('Invalid status code');
    }

}