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

}