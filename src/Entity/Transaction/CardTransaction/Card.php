<?php

namespace RedeCard\Ecommerce\Entity\Transaction\CardTransaction;

use RedeCard\Ecommerce\Entity\AbstractEntity;
use RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs;
use RedeCard\Ecommerce\Entity\Enum\CardAccountTypeEnum;
use RedeCard\Ecommerce\Exception\Exception;

/**
 * Class Card
 *
 * @package RedeCard\Ecommerce\Entity\Transaction\CardTransaction
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class Card extends AbstractEntity
{
    /**
     * Número do cartão
     *
     * Deve ser um número de cartão válido de 13 a 19 dígitos de comprimento
     *
     * @var string
     */
    protected $pan;

    /**
     * Data de validade do cartão
     *
     * Deve ser fornecida em formato mm/aa
     *
     * @var string
     */
    protected $expiryDate;

    /**
     * Card account type
     *
     * Para usar este campo, o adquirente do estabelecimento deve suportar a funcionalidade de cartões Combo.
     *
     * @var string credit/debit
     * @see RedeCard\Ecommerce\Entity\Enum\CardAccountTypeEnum
     */
    protected $cardAccountType;

    /**
     * @var Cv2Avs;
     */
    protected $cv2Avs;

    /**
     * @return Card
     */
    public function __construct()
    {
        return $this;
    }

    /**
     * @param $cardAccountType
     * @throws Exception
     * @return $this
     */
    public function setCardAccountType($cardAccountType)
    {
        switch ($cardAccountType) {
            case CardAccountTypeEnum::CREDIT:
            case CardAccountTypeEnum::DEBIT:
                $this->cardAccountType = $cardAccountType;
                return $this;
                break;
            default:
                throw new Exception('Invalid Card Account Type. Only "credit" or "debit" allowed.');
                break;
        }
    }

    /**
     * @return string
     */
    public function getCardAccountType()
    {
        return $this->cardAccountType;
    }

    /**
     * @param mixed $expiryDate
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param string $pan
     * @return $this
     */
    public function setPan($pan)
    {
        $this->pan = $pan;
        return $this;
    }

    /**
     * @return string
     */
    public function getPan()
    {
        return $this->pan;
    }

    /**
     * @param Cv2Avs $cv2Avs
     * @return $this
     */
    public function setCv2Avs(Cv2Avs $cv2Avs)
    {
        $this->cv2Avs = $cv2Avs;
        return $this;
    }

    /**
     * @return Cv2Avs
     */
    public function getCv2Avs()
    {
        return $this->cv2Avs;
    }
}
