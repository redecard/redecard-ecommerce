<?php

namespace RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs;

use RedeCard\Ecommerce\Entity\Enum\ExtendedPolicyAttributeEnum;

class ExtendedPolicyAttributesTest extends \PHPUnit_Framework_TestCase
{
    public function testSetMatchedWithValidArgument()
    {
        $class = new ExtendedPolicyAttributes;
        $result = $class->setMatched(ExtendedPolicyAttributeEnum::ACCEPT);
        $this->assertInstanceOf(
            'RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs\ExtendedPolicyAttributes',
            $result
        );
        $this->assertAttributeEquals(ExtendedPolicyAttributeEnum::ACCEPT, 'matched', $class);
        $class->setMatched(ExtendedPolicyAttributeEnum::REJECT);
        $this->assertEquals(ExtendedPolicyAttributeEnum::REJECT, $class->getMatched());
    }

    /**
     * @expectedException \RedeCard\Ecommerce\Exception\InvalidArgumentException
     */
    public function testSetMatchedWithInvalidArgumentShouldThrowInvalidArgumentException()
    {
        $class = new ExtendedPolicyAttributes;
        $class->setMatched('x');
    }

    public function testSetNotCheckedWithValidArgument()
    {
        $class = new ExtendedPolicyAttributes;
        $result = $class->setNotChecked(ExtendedPolicyAttributeEnum::ACCEPT);
        $this->assertInstanceOf(
            'RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs\ExtendedPolicyAttributes',
            $result
        );
        $this->assertAttributeEquals(ExtendedPolicyAttributeEnum::ACCEPT, 'notChecked', $class);
        $class->setNotChecked(ExtendedPolicyAttributeEnum::REJECT);
        $this->assertEquals(ExtendedPolicyAttributeEnum::REJECT, $class->getNotChecked());
    }

    /**
     * @expectedException \RedeCard\Ecommerce\Exception\InvalidArgumentException
     */
    public function testSetNotCheckedWithInvalidArgumentShouldThrowInvalidArgumentException()
    {
        $class = new ExtendedPolicyAttributes;
        $class->setNotChecked('x');
    }

    public function testSetNotMatchedWithValidArgument()
    {
        $class = new ExtendedPolicyAttributes;
        $result = $class->setNotMatched(ExtendedPolicyAttributeEnum::ACCEPT);
        $this->assertInstanceOf(
            'RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs\ExtendedPolicyAttributes',
            $result
        );
        $this->assertAttributeEquals(ExtendedPolicyAttributeEnum::ACCEPT, 'notMatched', $class);
        $class->setNotMatched(ExtendedPolicyAttributeEnum::REJECT);
        $this->assertEquals(ExtendedPolicyAttributeEnum::REJECT, $class->getNotMatched());
    }

    /**
     * @expectedException \RedeCard\Ecommerce\Exception\InvalidArgumentException
     */
    public function testSetNotMatchedWithInvalidArgumentShouldThrowInvalidArgumentException()
    {
        $class = new ExtendedPolicyAttributes;
        $class->setNotMatched('x');
    }

    public function testSetNotProvidedWithValidArgument()
    {
        $class = new ExtendedPolicyAttributes;
        $result = $class->setNotProvided(ExtendedPolicyAttributeEnum::ACCEPT);
        $this->assertInstanceOf(
            'RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs\ExtendedPolicyAttributes',
            $result
        );
        $this->assertAttributeEquals(ExtendedPolicyAttributeEnum::ACCEPT, 'notProvided', $class);
        $class->setNotProvided(ExtendedPolicyAttributeEnum::REJECT);
        $this->assertEquals(ExtendedPolicyAttributeEnum::REJECT, $class->getNotProvided());
    }

    /**
     * @expectedException \RedeCard\Ecommerce\Exception\InvalidArgumentException
     */
    public function testSetNotProvidedWithInvalidArgumentShouldThrowInvalidArgumentException()
    {
        $class = new ExtendedPolicyAttributes;
        $class->setNotProvided('x');
    }

    public function testSetPartialMatchWithValidArgument()
    {
        $class = new ExtendedPolicyAttributes;
        $result = $class->setPartialMatch(ExtendedPolicyAttributeEnum::ACCEPT);
        $this->assertInstanceOf(
            'RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs\ExtendedPolicyAttributes',
            $result
        );
        $this->assertAttributeEquals(ExtendedPolicyAttributeEnum::ACCEPT, 'partialMatch', $class);
        $class->setPartialMatch(ExtendedPolicyAttributeEnum::REJECT);
        $this->assertEquals(ExtendedPolicyAttributeEnum::REJECT, $class->getPartialMatch());
    }

    /**
     * @expectedException \RedeCard\Ecommerce\Exception\InvalidArgumentException
     */
    public function testSetPartialMatchWithInvalidArgumentShouldThrowInvalidArgumentException()
    {
        $class = new ExtendedPolicyAttributes;
        $class->setPartialMatch('x');
    }
}
