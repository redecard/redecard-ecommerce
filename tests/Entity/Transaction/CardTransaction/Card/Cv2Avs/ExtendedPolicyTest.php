<?php

namespace RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs;

use RedeCard\Ecommerce\Entity\Enum\ExtendedPolicyAttributeEnum;

class ExtendedPolicyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ExtendedPolicyAttributes
     */
    protected $policy;

    public function setUp()
    {
        $this->policy = new ExtendedPolicyAttributes;
        $this->policy->setNotChecked(ExtendedPolicyAttributeEnum::ACCEPT);
        $this->policy->setMatched(ExtendedPolicyAttributeEnum::REJECT);
        $this->policy->setNotMatched(ExtendedPolicyAttributeEnum::ACCEPT);
        $this->policy->setNotProvided(ExtendedPolicyAttributeEnum::REJECT);
        $this->policy->setPartialMatch(ExtendedPolicyAttributeEnum::ACCEPT);
    }

    public function testAddressPolicy()
    {
        $class = new ExtendedPolicy;
        $result = $class->setAddressPolicy($this->policy);
        $this->assertInstanceOf(
            'RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs\ExtendedPolicy',
            $result
        );
        $this->assertAttributeEquals($this->policy, 'addressPolicy', $class);
        $this->assertEquals($this->policy, $class->getAddressPolicy());
    }

    public function testPostCodePolicy()
    {
        $class = new ExtendedPolicy;
        $result = $class->setPostCodePolicy($this->policy);
        $this->assertInstanceOf(
            'RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs\ExtendedPolicy',
            $result
        );
        $this->assertAttributeEquals($this->policy, 'postCodePolicy', $class);
        $this->assertEquals($this->policy, $class->getPostCodePolicy());
    }

    public function testCv2Policy()
    {
        $class = new ExtendedPolicy;
        $result = $class->setCv2Policy($this->policy);
        $this->assertInstanceOf(
            'RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs\ExtendedPolicy',
            $result
        );
        $this->assertAttributeEquals($this->policy, 'cv2Policy', $class);
        $this->assertEquals($this->policy, $class->getCv2Policy());
    }

    public function testCpfPolicy()
    {
        $class = new ExtendedPolicy;
        $result = $class->setCpfPolicy($this->policy);
        $this->assertInstanceOf(
            'RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs\ExtendedPolicy',
            $result
        );
        $this->assertAttributeEquals($this->policy, 'cpfPolicy', $class);
        $this->assertEquals($this->policy, $class->getCpfPolicy());
    }

    public function tearDown()
    {
        unset($this->policy);
    }
}
