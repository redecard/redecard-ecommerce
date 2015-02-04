<?php

namespace RedeCard\Ecommerce\Entity\Authentication;

use RedeCard\Ecommerce\Entity\AbstractEntity;

/**
 * Class AcquirerCode
 *
 * Permite a um estabelecimento usar o número de identificação atribuído pelo adquirente.
 * Esta funcionalidade é limitada com base no adquirente do estabelecimento comercial.
 *
 * @package RedeCard\Ecommerce\Entity\Authentication
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class AcquirerCode extends AbstractEntity
{

    /**
     * Número de identificação do estabelecimento atribuído pelo adquirente.
     *
     * @var int 9 dígitos, numerico
     */
    protected $rdcd_pv;

    /**
     * @param int $rdcd_pv
     */
    public function __construct($rdcd_pv)
    {
        $this->setRdcdPv($rdcd_pv);
        return $this;
    }

    /**
     * @param int $rdcd_pv
     */
    public function setRdcdPv($rdcd_pv)
    {
        $this->rdcd_pv = $rdcd_pv;
        return $this;
    }

    /**
     * @return int
     */
    public function getRdcdPv()
    {
        return $this->rdcd_pv;
    }
}
