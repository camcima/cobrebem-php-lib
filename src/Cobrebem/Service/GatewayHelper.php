<?php

namespace Cobrebem\Service;

use Cobrebem\Entity\CreditCard\Authorization\Request as AuthorizationRequest;

/**
 * Gateway Helper
 *
 * @author Carlos Cima
 */
class GatewayHelper
{

    /**
     * Build Authorization Request Parameters Array
     * 
     * @param \Cobrebem\Entity\CreditCard\Authorization\Request $authorizationRequest
     * @return array
     */
    public function buildAuthorizationRequestArray(AuthorizationRequest $authorizationRequest)
    {
        return array();
    }
}
