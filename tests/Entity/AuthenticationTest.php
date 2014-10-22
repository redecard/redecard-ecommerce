<?php

namespace RedeCard\Ecommerce\Entity;

use RedeCard\Ecommerce\Entity\Authentication\AcquirerCode;
use RedeCard\Ecommerce\Entity\Enum\AuthenticationType;

class AuthenticationTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorWithTypeAcquirer()
    {
        $class = new Authentication(123456789, 'p4ssw0rd', AuthenticationType::ACQUIRER);
        $this->assertInstanceOf('RedeCard\Ecommerce\Entity\Authentication', $class);
        $expectedAcquirer = new AcquirerCode(123456789);
        $this->assertAttributeEquals($expectedAcquirer, 'AcquirerCode', $class);
        $this->assertEquals($expectedAcquirer, $class->getAcquirerCode());
    }

    public function testConstructorWithTypeClient()
    {
        $class = new Authentication(123456789, 'p4ssw0rd', AuthenticationType::CLIENT);
        $this->assertAttributeEquals(123456789, 'client', $class);
        $this->assertEquals(123456789, $class->getClient());
    }

    public function testConstructorSetPassword()
    {
        $class = new Authentication(123456789, 'p4ssw0rd', AuthenticationType::CLIENT);
        $this->assertAttributeEquals('p4ssw0rd', 'password', $class);
        $this->assertEquals('p4ssw0rd', $class->getPassword());
    }

    /**
     * @expectedException \RedeCard\Ecommerce\Exception\InvalidArgumentException
     */
    public function testConstructorWithInvalidTypeShouldThrowException()
    {
        new Authentication(123456789, 'p4ssw0rd', 0);
    }
}
