<?php

namespace RedeCard\Ecommerce\Entity\Authentication;

class AcquirerCodeTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $class = new AcquirerCode(123456789);
        $this->assertInstanceOf('RedeCard\Ecommerce\Entity\Authentication\AcquirerCode', $class);
        $this->assertAttributeEquals(123456789, 'rdcdPv', $class);
    }

    public function testRdcdPv()
    {
        $class = new AcquirerCode(123456789);
        $this->assertEquals(123456789, $class->getRdcdPv());
        $class->setRdcdPv(987654321);
        $this->assertAttributeEquals(987654321, 'rdcdPv', $class);
    }

    public function testValidStringRdcdPv()
    {
        $class = new AcquirerCode('123456789');
        $this->assertEquals(123456789, $class->getRdcdPv());
    }

    /**
     * @expectedException \RedeCard\Ecommerce\Exception\InvalidArgumentException
     */
    public function testInvalidRdcdPv()
    {
        new AcquirerCode(12345);
    }
}
