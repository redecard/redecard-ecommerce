<?php

namespace RedeCard\Ecommerce\Helper;

use RedeCard\Ecommerce\Entity\Request;
use RedeCard\Ecommerce\Entity\Authentication;
use RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card;
use RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs;
use RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs\ExtendedPolicy;
use RedeCard\Ecommerce\Entity\Transaction\CardTransaction\Card\Cv2Avs\ExtendedPolicyAttributes;
use RedeCard\Ecommerce\Entity\Transaction\CardTransaction;
use RedeCard\Ecommerce\Entity\Transaction\TransactionDetails;
use RedeCard\Ecommerce\Entity\Transaction\HistoricTransaction;
use RedeCard\Ecommerce\Entity\Transaction;
use RedeCard\Ecommerce\Entity\Transaction\TransactionDetails\Amount;
use RedeCard\Ecommerce\Entity\Enum\Currency\Iso4217Enum;
use RedeCard\Ecommerce\Entity\Enum\MethodEnum;
use RedeCard\Ecommerce\Entity\Enum\ExtendedPolicyAttributeEnum;

/**
 * Class Sample
 *
 * @package RedeCard\Ecommerce\Helper
 * @author Daniel Costa <danielcosta@gmail.com>
 */
class Samples
{

    /* Auxiliary methods */

    public static function getSampleRequest()
    {
        $addressPolicy = new ExtendedPolicyAttributes();
        $addressPolicy->setMatched(ExtendedPolicyAttributeEnum::ACCEPT)
            ->setNotChecked(ExtendedPolicyAttributeEnum::REJECT)
            ->setNotMatched(ExtendedPolicyAttributeEnum::ACCEPT)
            ->setNotProvided(ExtendedPolicyAttributeEnum::REJECT)
            ->setPartialMatch(ExtendedPolicyAttributeEnum::ACCEPT);

        $extendedPolicy = new ExtendedPolicy();
        $extendedPolicy->setAddressPolicy($addressPolicy)
            ->setCpfPolicy($addressPolicy)
            ->setCv2Policy($addressPolicy)
            ->setPostCodePolicy($addressPolicy);

        $cv2Avs = new Cv2Avs();
        $cv2Avs->setStreetAddress1('1 High Street')
            ->setStreetAddress2('Myaddress')
            ->setStreetAddress3('Mytown')
            ->setStreetAddress4('Australia')
            ->setPostCode('2999')
            ->setCv2('123')
            ->setCpf('000000000-00')
            ->setExtendedPolicy($extendedPolicy);

        $card = new Card();
        $card->setPan('544433***********1')
            ->setExpiryDate('04/14')
            ->setCardAccountType('credit')
            ->setCv2Avs($cv2Avs);

        $cardTransaction = new CardTransaction();
        $cardTransaction->setMethod('pre')
            ->setAuthCode('123123')
            ->setCard($card);

        $amount = new Amount();
        $amount->setAmount(999.99)
            ->setCurrency(Iso4217Enum::BRAZILIAN_REAL);

        $transactionDetails = new TransactionDetails();
        $transactionDetails->setMerchantReference('mobly123456678')
            ->setAmount($amount);

        $historicTransaction = new HistoricTransaction();
        $historicTransaction->setReference('4100200039275407')
            ->setAuthCode('6414131')
            ->setMethod(MethodEnum::FULFILL);

        $transaction = new Transaction();
        $transaction->setCardTransaction($cardTransaction)
            ->setTransactionDetails($transactionDetails)
            ->setHistoricTransaction($historicTransaction);

        $authentication = new Authentication('c1ientID', 'p4ss');

        $request = new Request($authentication);
        $request->setTransaction($transaction);

        return $request;
    }

    public static function getSampleRequestResultString()
    {
        return '<?xml version="1.0" encoding="UTF-8"?>
<Request version="2">
  <Authentication>
    <AcquirerCode>
      <rdcd_pv>c1ientID</rdcd_pv>
    </AcquirerCode>
    <password><![CDATA[p4ss]]></password>
  </Authentication>
  <Transaction>
    <CardTxn>
      <Card>
        <pan><![CDATA[544433***********1]]></pan>
        <expirydate><![CDATA[04/14]]></expirydate>
        <card_account_type><![CDATA[credit]]></card_account_type>
        <Cv2Avs>
          <street_address1><![CDATA[1 High Street]]></street_address1>
          <street_address2><![CDATA[Myaddress]]></street_address2>
          <street_address3><![CDATA[Mytown]]></street_address3>
          <street_address4><![CDATA[Australia]]></street_address4>
          <postcode><![CDATA[2999]]></postcode>
          <cpf><![CDATA[000000000-00]]></cpf>
          <cv2><![CDATA[123]]></cv2>
          <ExtendedPolicy>
            <cv2_policy notprovided="reject" notchecked="reject" matched="accept" notmatched="accept"
                        partialmatch="accept"/>
            <postcode_policy notprovided="reject" notchecked="reject" matched="accept" notmatched="accept"
                             partialmatch="accept"/>
            <address_policy notprovided="reject" notchecked="reject" matched="accept" notmatched="accept"
                            partialmatch="accept"/>
            <cpf_policy notprovided="reject" notchecked="reject" matched="accept" notmatched="accept"
                        partialmatch="accept"/>
          </ExtendedPolicy>
        </Cv2Avs>
      </Card>
      <authcode><![CDATA[123123]]></authcode>
      <method><![CDATA[pre]]></method>
    </CardTxn>
    <TxnDetails>
      <merchantreference><![CDATA[mobly123456678]]></merchantreference>
      <amount currency="BRL">999.99</amount>
    </TxnDetails>
    <HistoricTxn>
      <reference><![CDATA[4100200039275407]]></reference>
      <authcode><![CDATA[6414131]]></authcode>
      <method><![CDATA[fulfill]]></method>
    </HistoricTxn>
  </Transaction>
</Request>
';
    }

    public static function getRespostaPadrao()
    {
        return "<Response version='2'>
    <gatewayReference>3100000088888123</gatewayReference>
    <merchantReference>1000113</merchantReference>
    <mode>LIVE</mode>
    <reason>...</reason>
    <status>...</status>
    <time>1134692433</time>
    <authHostReference>1234</authHostReference>
</Response>";
    }

    public static function getRespostaTransacaoInicialAutorizada()
    {
        return "<Response version='2'>
    <CardTxn>
        <authcode>060642</authcode>
        <card_scheme>Mastercard</card_scheme>
        <country>Australia</country>
        <issuer>MyBank</issuer>
    </CardTxn>
    <gateway_reference>3000000088888888</gateway_reference>
    <merchantreference>1000001</merchantreference>
    <mode>LIVE</mode>
    <reason>ACCEPTED</reason>
    <status>1</status>
    <time>1071567305</time>
    <auth_host_reference>1234</auth_host_reference>
</Response>";
    }

    public static function getRespostaTransacaoRejeitada()
    {
        return "<Response version='2'>
    <CardTxn>
        <authcode>DECLINED</authcode>
        <card_scheme>Mastercard</card_scheme>
        <country>Australia</country>
        <extended_response>58</extended_response>
        <extended_response_message>Transação não autorizada. Contate o emissor.</extended_response_message>
    </CardTxn>
    <gateway_reference>4400200045583767</gateway_reference>
    <merchantreference>AA004630</merchantreference>
    <mode>TEST</mode>
    <reason>DECLINED</reason>
    <status>7</status>
    <time>1169223906</time>
    <auth_host_reference>1234</auth_host_reference>
</Response>";
    }

    public static function getRespostaEstornoRealizadoComExito()
    {
        return "<Response version='2'>
    <gateway_reference>4900200000000001</gateway_reference>
    <merchantreference>4900200000000001</merchantreference>
    <mode>TEST</mode>
    <reason>CANCELLED OK</reason>
    <status>1</status>
    <time>1151567456</time>
    <auth_host_reference>1234</auth_host_reference>
</Response>";
    }

    public static function getRespostaConfirmacaoRealizadaComExito()
    {
        return "<Response version='2'>
    <gateway_reference>3900200000000001</gateway_reference>
    <merchantreference>3900200000000001</merchantreference>
    <mode>LIVE</mode>
    <reason>FULFILLED OK</reason>
    <status>1</status>
    <time>1071567356</time>
    <auth_host_reference>1234</auth_host_reference>
</Response>";
    }

    public static function getRespostaTransacaoAprovadaComExitoNaVerificacaoCv2AvsPoliticaPadrao()
    {
        return "<Response version='2'>
    <CardTxn>
        <authcode>3956</authcode>
        <card_scheme>Mastercard</card_scheme>
        <Cv2Avs>
            <cv2avs_status>SECURITY CODE MATCH ONLY</cv2avs_status>
            <policy>2</policy>
            </Cv2Avs>
    </CardTxn>
    <gateway_reference>4000000098765888</gateway_reference>
    <merchantref>...</merchantref>
    <mode>...</mode>
    <reason>ACCEPTED</reason>
    <status>1</status>
    <time>...2</time>
    <auth_host_reference>1234</auth_host_reference>
</Response>";
    }

    public static function getRespostaTransacaoAprovadaComExitoNaVerificacaoCv2AvsPoliticaEstendida()
    {
        return "<Response version='2'>
    <CardTxn>
        <authcode>4382</authcode>
        <card_scheme>Mastercard</card_scheme>
        <Cv2Avs>
            <address_policy notprovided='reject' notchecked='accept' matched='accept' notmatched='reject'
                            partialmatch='accept'/>
            <address_result numeric='2'>matched</address_result>
            <cv2_policy notprovided='reject' notchecked='accept' matched='accept' notmatched='reject'
                        partialmatch='reject'/>
            <cv2_result numeric='1'>not checked</cv2_result>
            <cv2avs_status>ACCEPTED</cv2avs_status>
            <postcode_policy notprovided='reject' notchecked='accept' matched='accept' notmatched='reject'
                             partialmatch='accept'/>
            <postcode_result numeric='2'>matched</postcode_result>
        </Cv2Avs>
    </CardTxn>
    <gateway_reference>4000000098765433</gateway_reference>
    <merchantref>...</merchantref>
    <mode>...</mode>
    <reason>ACCEPTED</reason>
    <status>1</status>
    <time>...</time>
    <auth_host_reference>1234</auth_host_reference>
</Response>";
    }

    public static function getRespostaTransacaoRejeitadaCv2AvsPoliticaPadrao()
    {
        return "<Response version='2'>
    <CardTxn>
        <authcode>3956</authcode>
        <card_scheme>Mastercard</card_scheme>
        <Cv2Avs>
            <cv2avs_status reversal='1'>ADDRESS MATCH ONLY </cv2avs_status>
            <policy>3</policy>
        </Cv2Avs>
    </CardTxn>
    <gateway_reference>4000000098765889</gateway_reference>
    <merchantref>123998</merchantref>
    <mode>LIVE</mode>
    <reason>CV2AVS DECLINED</reason>
    <status>7</status>
    <time>1234567812</time>
    <auth_host_reference>1234</auth_host_reference>
</Response>";
    }

    public static function getRespostaTransacaoRejeitadaCv2AvsPoliticaEstendida()
    {
        return "<Response version='1'>
    <CardTxn>
        <authcode>2893</authcode>
        <card_scheme>Mastercard</card_scheme>
        <country>Australia</country>
        <Cv2Avs>
            <address_policy notprovided='reject' notchecked='accept' matched='accept' notmatched='reject'
                            partialmatch='accept' />
            <address_result numeric='1'>notchecked</address_result>
            <cv2_policy notprovided='reject' notchecked='accept' matched='accept' notmatched='reject'
                        partialmatch='reject' />
            <cv2_result numeric='2'>matched</cv2_result>
            <cv2avs_status reversal='1'>REJECTED</cv2avs_status>
            <postcode_policy notprovided='reject' notchecked='accept' matched='accept' notmatched='reject'
                             partialmatch='accept' />
            <postcode_result numeric='4'>notmatched</postcode_result>
        </Cv2Avs>
    </CardTxn>
    <gateway_reference>4000000098765432</gateway_reference>
    <merchantref>123456</merchantref>
    <mode>LIVE</mode>
    <reason>CV2AVS DECLINED</reason>
    <status>7</status>
    <time>1234567890</time>
    <auth_host_reference>1234</auth_host_reference>
</Response>";
    }

    public static function getRespostaConsultaTransacaoSucesso()
    {
        return "<Response version='2'>
    <QueryTxnResult>
        <Card>
            <expirydate>0114</expirydate>
            <issuenumber>0101</issuenumber>
            <pan>633300******0005</pan>
        </Card>
        <ThreeDSecure>
            <eci>11</eci>
            <security_code>Q0FWVkNBVlZDQVZWQ0FWVkNBVlY=</security_code>
            <transactionID>MDAwMDAwMDAwMDAwMTIzNDU2NzE=</transactionID>
        </ThreeDSecure>
        <acquirer>mybank</acquirer>
        <authcode>100000</authcode>
        <gateway_reference>4000900012345671</gateway_reference>
        <environment>ecomm</environment>
        <fulfill_date>2013-09-03 16:00:09</fulfill_date>
        <fulfill_timestamp>1378376509</fulfill_timestamp>
        <merchant_reference>4421000008</merchant_reference>
        <reason>ACCEPTED</reason>
        <sent>1</sent>
        <status>1</status>
        <transaction_date>2011-12-12 11:56:53</transaction_date>
        <transaction_timestamp>1378224009</transaction_timestamp>
        <auth_host_reference>1234</auth_host_reference>
    </QueryTxnResult>
    <mode>TEST</mode>
    <reason>ACCEPTED</reason>
    <status>1</status>
    <time>1260273415</time>
</Response>";
    }

    public static function getRespostaTransacaoErro()
    {
        return "<Response version='2'>
    <gateway_reference>4100900012345675</gateway_reference>
    <information>The transaction you are querying
cannot be located</information>
    <mode>TEST</mode>
    <reason>Cannot locate transaction to query</reason>
    <status>274</status>
    <time>1260274296</time>
</Response>";
    }
}
