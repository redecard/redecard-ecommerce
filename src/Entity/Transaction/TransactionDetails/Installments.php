<?php

namespace RedeCard\Ecommerce\Entity\Transaction\TransactionDetails;

use RedeCard\Ecommerce\Entity\AbstractEntity;

/**
 * Class Installments
 *
 * @package RedeCard\Ecommerce\Entity\Transaction\CardTransaction
 * @author Alexandre Rodrigues Xavier <alexandre.rodrigues.xv@gmail.com>
 */
class Installments extends AbstractEntity
{
    /**
     * Parcelado com Juros
     *
     * @const string
     */
    const ENUM_TYPE_INTEREST_BEARING = 'interest_bearing';

    /**
     * Parcelado sem Juros
     *
     * @const string
     */
    const ENUM_TYPE_ZERO_INTEREST = 'zero_interest';

    /**
     * Indica ao emitente se a parcela carrega juros ou não.
     *
     * @see RedeCard\Ecommerce\Entity\Transaction\TransactionDetails\installments::ENUM_TYPE_INTEREST_BEARING
     * @see RedeCard\Ecommerce\Entity\Transaction\TransactionDetails\installments::ENUM_TYPE_ZERO_INTEREST
     *
     * @var string $type
     */
    protected $type;

    /**
     * Indica ao emitente o número de parcelas a serem pagas.
     *
     * @var int
     */
    protected $number;

    /**
     * @param int $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
