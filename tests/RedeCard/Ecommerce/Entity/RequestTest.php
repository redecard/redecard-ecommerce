<?php

namespace RedeCard\Ecommerce\Entity;

use PHPUnit_Framework_TestCase;
use RedeCard\Ecommerce\Helper\Samples;
use RedeCard\Ecommerce\Serializer\Builder;

/**
 * Class RequestTest
 *
 * *!*!*!*!*!*!* UNFINISHED FILE *!*!*!*!*!*!*!*
 *
 * @package RedeCard\Ecommerce
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class RequestTest extends PHPUnit_Framework_TestCase {
    
    public function testRequestWithSampleData()
    {
        $result = Builder::create()->serialize(Samples::getSampleRequest(), 'xml');
        $this->assertXmlStringEqualsXmlString(Samples::getSampleRequestResultString(), $result);
    }

}