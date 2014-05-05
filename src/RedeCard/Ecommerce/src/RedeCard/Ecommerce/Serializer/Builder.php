<?php

namespace RedeCard\Ecommerce\Serializer;

use JMS\Serializer\SerializerBuilder;

/**
 * Class Builder
 *
 * @package RedeCard\Ecommerce\Serializer
 * @author Daniel Costa <daniel.costa@mobly.com.br>
 */
class Builder {

    /**
     * @return \JMS\Serializer\Serializer
     */
    public static function create()
    {
        return SerializerBuilder::create()
            ->addMetadataDir(__DIR__ . DIRECTORY_SEPARATOR . 'config', 'RedeCard\Ecommerce')
            ->build();
    }

    /**
     * Removes CDATA sections from XML string to accomplish RedeCard's requirement
     *
     * @param string $xml
     *
     * @return string
     */
    public static function removeCdata($xml)
    {
        return str_replace('<![CDATA[', '', str_replace(']]>', '', $xml));
    }

}