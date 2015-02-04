<?php

namespace RedeCard\Ecommerce\Entity\Transaction;

use RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Cv2AvsResult;

/**
 * Class CardTransactionResult
 *
 * @package RedeCard\Ecommerce\Entity\Transaction
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class CardTransactionResult
{

    /**
     * O banco emissor do cartão, se conhecido.
     *
     * @var string
     */
    protected $issuer;

    /**
     * A bandeira do cartão, se conhecido, são listados os valores atuais que podem ser exibidos.
     *
     * @var string
     * @see RedeCard\Ecommerce\Entity\Enum\CardSchemeEnum
     */
    protected $cardScheme;

    /**
     * O país de emissão, se conhecido.
     *
     * @var string
     */
    protected $country;

    /**
     * Código de autorização para transações realizadas com êxito.
     * Informações adicionais do banco em caso de rejeição ou indicação.
     *
     * @var string
     */
    protected $authCode;

    /**
     * @var CardTransaction\Cv2AvsResult
     */
    protected $Cv2Avs;

    /**
     * @param Cv2AvsResult $Cv2Avs
     */
    public function setCv2Avs(Cv2AvsResult $Cv2Avs)
    {
        $this->Cv2Avs = $Cv2Avs;
        return $this;
    }

    /**
     * @return Cv2AvsResult
     */
    public function getCv2Avs()
    {
        return $this->Cv2Avs;
    }

    /**
     * @param string $authCode
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * @param string $cardScheme
     */
    public function setCardScheme($cardScheme)
    {
        $this->cardScheme = $cardScheme;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardScheme()
    {
        return $this->cardScheme;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $issuer
     */
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }
}
