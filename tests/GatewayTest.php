<?php

namespace Cobrebem\Test;

use Cobrebem\Service\Gateway;
use Cobrebem\Entity\CreditCard\Authorization\Request as AuthorizationRequest;

/**
 * Gateway Service Test
 *
 * @author Carlos Cima
 */
class GatewayTest extends \PHPUnit_Framework_TestCase
{
    public function testAuthorize()
    {
        $gateway = new Gateway('username', Gateway::ENV_TEST_SERVER);
        $authorizationRequest = new AuthorizationRequest();
        $result = $gateway->authorize($authorizationRequest);
        $this->assertInstanceOf('\Cobrebem\Entity\CreditCard\Authorization\Response', $result);
    }

}
