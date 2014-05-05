<?php

namespace RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs;

/**
 * Class ExtendedPolicyAttributes
 *
 * @package RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class ExtendedPolicyAttributes {

    /**
     * @var string reject/accept
     * @see RedeCard\Ecommerce\Entity\Enum\ExtendedPolicyAttributeEnum
     */
    protected $notProvided;

    /**
     * @var string reject/accept
     * @see RedeCard\Ecommerce\Entity\Enum\ExtendedPolicyAttributeEnum
     */
    protected $notChecked;

    /**
     * @var string reject/accept
     * @see RedeCard\Ecommerce\Entity\Enum\ExtendedPolicyAttributeEnum
     */
    protected $matched;

    /**
     * @var string reject/accept
     * @see RedeCard\Ecommerce\Entity\Enum\ExtendedPolicyAttributeEnum
     */
    protected $notMatched;

    /**
     * @var string reject/accept
     * @see RedeCard\Ecommerce\Entity\Enum\ExtendedPolicyAttributeEnum
     */
    protected $partialMatch;

    /**
     * @param string $matched
     */
    public function setMatched($matched)
    {
        $this->matched = $matched;
        return $this;
    }

    /**
     * @return string
     */
    public function getMatched()
    {
        return $this->matched;
    }

    /**
     * @param string $notChecked
     */
    public function setNotChecked($notChecked)
    {
        $this->notChecked = $notChecked;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotChecked()
    {
        return $this->notChecked;
    }

    /**
     * @param string $notMatched
     */
    public function setNotMatched($notMatched)
    {
        $this->notMatched = $notMatched;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotMatched()
    {
        return $this->notMatched;
    }

    /**
     * @param string $notProvided
     */
    public function setNotProvided($notProvided)
    {
        $this->notProvided = $notProvided;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotProvided()
    {
        return $this->notProvided;
    }

    /**
     * @param string $partialMatch
     */
    public function setPartialMatch($partialMatch)
    {
        $this->partialMatch = $partialMatch;
        return $this;
    }

    /**
     * @return string
     */
    public function getPartialMatch()
    {
        return $this->partialMatch;
    }

}