<?php

namespace Cobrebem\Service;

use Cobrebem\Entity\CreditCard\Authorization\Request as AuthorizationRequest;
use Cobrebem\Entity\CreditCard\Authorization\Response as AuthorizationResponse;
use Cobrebem\Entity\Environment;

/**
 * Gateway Service
 *
 * @author Carlos Cima
 */
class Gateway
{
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
        $parameters = $this->gatewayHelper->buildAuthorizationRequestArray($authorizationRequest);
        return new AuthorizationResponse();
    }

    protected function setGatewayUrl($environment)
    {
        if (!in_array($environment, array_keys($this->envUrls))) {
            throw new \InvalidArgumentException('Invalid Gateway Environment');
        }
        $this->gatewayUrl = str_replace('<usuario>', $this->username, $this->envUrls[$environment]);
    }

    protected function setEnvironmentUrls()
    {
        $this->envUrls[Environment::MAIN_SERVER] = 'https://www.aprovafacil.com/cgi-bin/APFW/<usuario>/';
        $this->envUrls[Environment::BACKUP_SERVER] = 'https://backup.aprovafacil.com/cgi-bin/APFW/<usuario>/';
        $this->envUrls[Environment::BACKUP_SERVER_2] = 'https://backup2.aprovafacil.com/cgi-bin/APFW/<usuario>/';
        $this->envUrls[Environment::TEST_SERVER] = 'https://teste.aprovafacil.com/cgi-bin/APFW/<usuario>/';
    }
}
