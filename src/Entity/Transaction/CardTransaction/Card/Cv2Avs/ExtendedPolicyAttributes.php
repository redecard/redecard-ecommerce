<?php

namespace RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs;

use RedeCard\Ecommerce\Entity\Enum\ExtendedPolicyAttributeEnum;
use RedeCard\Ecommerce\Exception\InvalidArgumentException;

/**
 * Class ExtendedPolicyAttributes
 *
 * @package RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class ExtendedPolicyAttributes
{
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
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setMatched($matched)
    {
        if (!$this->isValid($matched)) {
            throw new InvalidArgumentException('Invalid argument passed, "accept" or "reject" expected');
        }

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
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setNotChecked($notChecked)
    {
        if (!$this->isValid($notChecked)) {
            throw new InvalidArgumentException('Invalid argument passed, "accept" or "reject" expected');
        }

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
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setNotMatched($notMatched)
    {
        if (!$this->isValid($notMatched)) {
            throw new InvalidArgumentException('Invalid argument passed, "accept" or "reject" expected');
        }
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
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setNotProvided($notProvided)
    {
        if (!$this->isValid($notProvided)) {
            throw new InvalidArgumentException('Invalid argument passed, "accept" or "reject" expected');
        }

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
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setPartialMatch($partialMatch)
    {
        if (!$this->isValid($partialMatch)) {
            throw new InvalidArgumentException('Invalid argument passed, "accept" or "reject" expected');
        }
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

    /**
     * @param $value
     * @return bool
     */
    protected function isValid($value)
    {
        return ($value == ExtendedPolicyAttributeEnum::ACCEPT || $value == ExtendedPolicyAttributeEnum::REJECT);
    }
}
