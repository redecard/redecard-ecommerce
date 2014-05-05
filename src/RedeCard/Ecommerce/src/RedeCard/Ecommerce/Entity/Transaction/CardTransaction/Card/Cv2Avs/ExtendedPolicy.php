<?php

namespace RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs;

use RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs\ExtendedPolicyAttributes;

/**
 * Class ExtendedPolicy
 *
 * @package RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs
 * @author Daniel Costa <daniel.costa@mobly.com.br>
 */
class ExtendedPolicy {

    /**
     * Cada um desses elementos possui cinco atributos
     *
     * @var ExtendedPolicyAttributes
     */
    protected $cv2Policy;

    /**
     * Cada um desses elementos possui cinco atributos
     *
     * @var ExtendedPolicyAttributes
     */
    protected $postCodePolicy;

    /**
     * Cada um desses elementos possui cinco atributos
     *
     * @var ExtendedPolicyAttributes
     */
    protected $addressPolicy;

    /**
     * Cada um desses elementos possui cinco atributos
     *
     * @var ExtendedPolicyAttributes
     */
    protected $cpfPolicy;

    /**
     * @param ExtendedPolicyAttributes $addressPolicy
     */
    public function setAddressPolicy(ExtendedPolicyAttributes $addressPolicy)
    {
        $this->addressPolicy = $addressPolicy;
        return $this;
    }

    /**
     * @return ExtendedPolicyAttributes
     */
    public function getAddressPolicy()
    {
        return $this->addressPolicy;
    }

    /**
     * @param ExtendedPolicyAttributes $cpfPolicy
     */
    public function setCpfPolicy(ExtendedPolicyAttributes $cpfPolicy)
    {
        $this->cpfPolicy = $cpfPolicy;
        return $this;
    }

    /**
     * @return ExtendedPolicyAttributes
     */
    public function getCpfPolicy()
    {
        return $this->cpfPolicy;
    }

    /**
     * @param ExtendedPolicyAttributes $cv2Policy
     */
    public function setCv2Policy(ExtendedPolicyAttributes $cv2Policy)
    {
        $this->cv2Policy = $cv2Policy;
        return $this;
    }

    /**
     * @return ExtendedPolicyAttributes
     */
    public function getCv2Policy()
    {
        return $this->cv2Policy;
    }

    /**
     * @param ExtendedPolicyAttributes $postCodePolicy
     */
    public function setPostCodePolicy(ExtendedPolicyAttributes $postCodePolicy)
    {
        $this->postCodePolicy = $postCodePolicy;
        return $this;
    }

    /**
     * @return ExtendedPolicyAttributes
     */
    public function getPostCodePolicy()
    {
        return $this->postCodePolicy;
    }

}