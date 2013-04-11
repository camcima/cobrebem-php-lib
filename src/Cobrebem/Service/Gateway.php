<?php

namespace Cobrebem\Service;

use Cobrebem\Entity\CreditCard\Authorization\Request as AuthorizationRequest;
use Cobrebem\Entity\CreditCard\Authorization\Response as AuthorizationResponse;
use Cobrebem\Entity\CreditCard\Authorization\RecurrentRequest;
use Cobrebem\Entity\Environment;
use Cobrebem\Entity\CommunicationError;
use Guzzle\Http\Client;
use Guzzle\Common\Exception\RuntimeException;

/**
 * Gateway Service
 *
 * @author Carlos Cima
 */
class Gateway
{
    /**
     * URI constants
     */
    const URI_AUTHORIZATION = 'APC';
    const URI_CAPTURE = 'CAP';

    /**
     * Environment URLs
     * 
     * @var array 
     */
    protected $envUrls = array();

    /**
     * Cobrebem Username
     * 
     * @var string 
     */
    protected $username;

    /**
     * Gateway URL
     * 
     * @var string 
     */
    protected $gatewayUrl;

    /**
     * Gateway Helper
     * 
     * @var \Cobrebem\Service\GatewayHelper 
     */
    protected $gatewayHelper;

    /**
     * Constructor
     * 
     * @param string $username Username
     * @param string $environment Gateway Environment (use Environment Entity constants)
     */
    public function __construct($username, $environment)
    {
        $this->setEnvironmentUrls();
        if (strlen($username) == 0) {
            throw new \InvalidArgumentException('Invalid Username');
        }
        $this->username = $username;
        $this->setGatewayUrl($environment);
        $this->gatewayHelper = new GatewayHelper();
    }

    /**
     * Fazer chamada para transação de autorização de cartão de crédito
     * 
     * Approval Request
     * 
     * @param \Cobrebem\Entity\CreditCard\Authorization\Request $authorizationRequest
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function authorize(AuthorizationRequest $authorizationRequest)
    {
        $authorizationResponse = new AuthorizationResponse();
        $httpClient = $this->getHttpClient($this->gatewayUrl);

        $parameters = $this->gatewayHelper->buildAuthorizationRequestArray($authorizationRequest);

        $httpRequest = $httpClient->post(static::URI_AUTHORIZATION)->addPostFields($parameters);
        try {
            $httpResponse = $httpRequest->send();
        } catch (\Exception $e) {
            $authorizationResponse->setTransacaoAprovada(false);
            $authorizationResponse->setHasCommunicationError(true);
            $authorizationResponse->setCommunicationErrorMessage(CommunicationError::CONNECTION_ERROR);

            return $authorizationResponse;
        }

        $authorizationResponse->setRawResponse($httpResponse->getMessage());
        try {
            $resultadoApc = $httpResponse->xml();
        } catch (RuntimeException $e) {
            $authorizationResponse->setTransacaoAprovada(false);
            $authorizationResponse->setHasCommunicationError(true);
            $authorizationResponse->setCommunicationErrorMessage(CommunicationError::INVALID_XML_RESPONSE);

            return $authorizationResponse;
        }

        $transacaoAprovada = trim(strtolower((string) $resultadoApc->TransacaoAprovada));
        $authorizationResponse->setTransacaoAprovada(($transacaoAprovada == 'true') ? true : false);
        $authorizationResponse->setResultadoSolicitacaoAprovacao((string) $resultadoApc->ResultadoSolicitacaoAprovacao);
        $authorizationResponse->setCodigoAutorizacao((string) $resultadoApc->CodigoAutorizacao);
        $authorizationResponse->setTransacao((string) $resultadoApc->Transacao);
        $authorizationResponse->setCartaoMascarado((string) $resultadoApc->CartaoMascarado);
        $authorizationResponse->setNumeroDocumento((string) $resultadoApc->NumeroDocumento);
        $authorizationResponse->setAdquirente((string) $resultadoApc->Adquirente);
        $authorizationResponse->setNumeroSequencialUnico((string) $resultadoApc->NumeroSequencialUnico);
        $authorizationResponse->setComprovanteAdministradora((string) $resultadoApc->ComprovanteAdministradora);
        $authorizationResponse->setNacionalidadeEmissor((string) $resultadoApc->NacionalidadeEmissor);

        return $authorizationResponse;
    }

    /**
     * Fazer chamada recorrente para transação de autorização de cartão de crédito
     * 
     * Recurrent Approval Request
     * 
     * @param \Cobrebem\Entity\CreditCard\Authorization\RecurrentRequest $recurrentRequest
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function authorizeRecurrent(RecurrentRequest $recurrentRequest)
    {
        $authorizationResponse = new AuthorizationResponse();
        $httpClient = $this->getHttpClient($this->gatewayUrl);

        $parameters = $this->gatewayHelper->buildRecurrentAuthorizationRequestArray($recurrentRequest);

        $httpRequest = $httpClient->post(static::URI_AUTHORIZATION)->addPostFields($parameters);
        try {
            $httpResponse = $httpRequest->send();
        } catch (\Exception $e) {
            $authorizationResponse->setTransacaoAprovada(false);
            $authorizationResponse->setHasCommunicationError(true);
            $authorizationResponse->setCommunicationErrorMessage(CommunicationError::CONNECTION_ERROR);

            return $authorizationResponse;
        }

        $authorizationResponse->setRawResponse($httpResponse->getMessage());
        try {
            $resultadoApc = $httpResponse->xml();
        } catch (RuntimeException $e) {
            $authorizationResponse->setTransacaoAprovada(false);
            $authorizationResponse->setHasCommunicationError(true);
            $authorizationResponse->setCommunicationErrorMessage(CommunicationError::INVALID_XML_RESPONSE);

            return $authorizationResponse;
        }

        $transacaoAprovada = trim(strtolower((string) $resultadoApc->TransacaoAprovada));
        $authorizationResponse->setTransacaoAprovada(($transacaoAprovada == 'true') ? true : false);
        $authorizationResponse->setResultadoSolicitacaoAprovacao((string) $resultadoApc->ResultadoSolicitacaoAprovacao);
        $authorizationResponse->setCodigoAutorizacao((string) $resultadoApc->CodigoAutorizacao);
        $authorizationResponse->setTransacao((string) $resultadoApc->Transacao);
        $authorizationResponse->setCartaoMascarado((string) $resultadoApc->CartaoMascarado);
        $authorizationResponse->setNumeroDocumento((string) $resultadoApc->NumeroDocumento);
        $authorizationResponse->setAdquirente((string) $resultadoApc->Adquirente);
        $authorizationResponse->setNumeroSequencialUnico((string) $resultadoApc->NumeroSequencialUnico);
        $authorizationResponse->setComprovanteAdministradora((string) $resultadoApc->ComprovanteAdministradora);
        $authorizationResponse->setNacionalidadeEmissor((string) $resultadoApc->NacionalidadeEmissor);

        return $authorizationResponse;
    }

    /**
     * Set Cobrebem Gateway URL
     * 
     * @param string $environment
     * @throws \InvalidArgumentException
     */
    protected function setGatewayUrl($environment)
    {
        if (!in_array($environment, array_keys($this->envUrls))) {
            throw new \InvalidArgumentException('Invalid Gateway Environment');
        }
        $this->gatewayUrl = str_replace('<usuario>', $this->username, $this->envUrls[$environment]);
    }

    /**
     * Set Environment URLs
     */
    protected function setEnvironmentUrls()
    {
        $this->envUrls[Environment::MAIN_SERVER] = 'https://www.aprovafacil.com/cgi-bin/APFW/<usuario>/';
        $this->envUrls[Environment::BACKUP_SERVER] = 'https://backup.aprovafacil.com/cgi-bin/APFW/<usuario>/';
        $this->envUrls[Environment::BACKUP_SERVER_2] = 'https://backup2.aprovafacil.com/cgi-bin/APFW/<usuario>/';
        $this->envUrls[Environment::TEST_SERVER] = 'https://teste.aprovafacil.com/cgi-bin/APFW/<usuario>/';
    }

    /**
     * Get HTTP client
     * 
     * @param string $baseUrl
     * @return \Guzzle\Http\Client
     */
    protected function getHttpClient($baseUrl)
    {
        $options = array();
        if ($this->isWindows()) {
            $options['curl.options']['CURLOPT_SSL_VERIFYPEER'] = false;
        }

        $client = new Client($baseUrl, $options);

        return $client;
    }

    /**
     * Is this application running on Windows?
     * 
     * @return boolean
     */
    protected function isWindows()
    {
        if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
            return true;
        } else {
            return false;
        }
    }

}
