<?php

namespace RedeCard\Ecommerce\Entity\Enum;

use RedeCard\Ecommerce\Exception\Exception;

/**
 * Class ExtendedStatusEnum
 *
 * 04 - Códigos de transações rejeitadas
 * Guia de Referência dos Desenvolvedores do e-Rede - Pg 57
 * "extended_status" quando "status" = 7
 *
 * @package RedeCard\Ecommerce\Entity\Enum
 * @author Maicon Sasse <maicon_sasse@yahoo.com.br>
 */
class ExtendedStatusEnum
{

    protected $descriptions = array(
        51 => 'Produto ou serviço não habilitado para o estabelecimento. Entre em contato com a Rede',
        53 => 'Transação não permitida para o emissor. Entre em contato com a Rede',
        56 => 'Erro nos dados informados. Tente novamente. '
        //. 'Ao receber este erro na transação de confirmação da pré (fulfill), '
        //. 'importante reenviar a transação diariamente durante 3 dias e caso persista o erro entrar em contato com nosso suporte técnico'
        ,
        57 => 'Estabelecimento inválido',
        58 => 'Transação não autorizada. Contate o emissor',
        65 => 'Senha inválida. Tente novamente',
        69 => 'Transação não permitida para este produto ou serviço',
        72 => 'Contate o emissor',
        74 => 'Falha na comunicação. Tente novamente',
        79 => 'Cartão expirado. Transação não pode ser resubmetida. Contate o emissor',
        80 => 'Transação não autorizada. Contate o emissor. (Saldo Insuficiente)',
        81 => 'Produto ou serviço não habilitado para o emissor (AVS)',
        82 => 'Transação não autorizada para cartão de débito',
        83 => 'Transação não autorizada. Problemas com cartão. Contate o emissor',
        84 => 'Transação não autorizada. Transação não pode ser resubmetida. Contate o emissor'
    );

    public function getDescriptionByCode($id)
    {
        if (isset($this->descriptions[$id])) {
            return $this->descriptions[$id];
        }
        throw new Exception('Invalid status code');
    }

}
