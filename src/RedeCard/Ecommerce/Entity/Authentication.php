<?php

namespace RedeCard\Ecommerce\Entity;

use RedeCard\Ecommerce\Entity\Authentication\AcquirerCode;
use RedeCard\Ecommerce\Entity\Enum\AuthenticationTypeEnum;
use RedeCard\Ecommerce\Exception\InvalidAuthenticationTypeException;

/**
 * Class Authentication
 *
 * @package RedeCard\Ecommerce\Entity
 * @author Daniel Costa <daniel.costa@mobly.com.br>
 */
class Authentication extends AbstractEntity {

    /**
     * Permite a um estabelecimento usar o número de identificação atribuído pelo adquirente.
     *
     * Esta funcionalidade é limitada com base no adquirente do estabelecimento comercial.
     * Não pode ser usado em conjunto com o elemento Client.
     *
     * @var AcquirerCode
     * @see Veja Seção 2.1.1.1.2.
     */
    protected $AcquirerCode;

    /**
     * Client ID
     *
     * Não pode ser usado em conjunto com o elemento AcquirerCode
     *
     * @var string
     * @see Veja Seção 2.1.1.1.2.
     */
    protected $client;

    /**
     * Senha disponibilizada pelo e-Commerce Redecard.
     *
     * @var string
     */
    protected $password;

    /**
     * @param int $client Client ID or AcquirerCode
     * @param string $password Password
     * @param string $type Authentication Type
     * @throws \RedeCard\Ecommerce\Exception\InvalidAuthenticationTypeException
     */
    public function __construct($client, $password, $type = AuthenticationTypeEnum::ACQUIRER)
    {
        switch ($type) {
            case AuthenticationTypeEnum::ACQUIRER:
                $acquirer = new AcquirerCode($client);
                $this->setAcquirerCode($acquirer);
                break;
            case AuthenticationTypeEnum::CLIENT:
                $this->setClient($client);
                break;
            default:
                throw new InvalidAuthenticationTypeException('Invalid authentication type');
        }
        $this->setPassword($password);
        return $this;
    }

    /**
     * @param AcquirerCode $AcquirerCode
     */
    public function setAcquirerCode(AcquirerCode $AcquirerCode)
    {
        $this->AcquirerCode = $AcquirerCode;
        return $this;
    }

    /**
     * @return AcquirerCode
     */
    public function getAcquirerCode()
    {
        return $this->AcquirerCode;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $client
     */
    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

}