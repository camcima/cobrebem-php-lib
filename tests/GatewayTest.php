<?php

namespace Cobrebem\Test;

use Cobrebem\Service\Gateway;
use Cobrebem\Entity\CreditCard\Authorization\Request as AuthorizationRequest;
use Cobrebem\Entity\CreditCard\Authorization\RecurrentRequest;
use Cobrebem\Entity\CreditCard\Capture\Request as CaptureRequest;
use Cobrebem\Entity\Environment;

/**
 * Gateway Service Test
 *
 * @author Carlos Cima
 */
class GatewayTest extends \PHPUnit_Framework_TestCase
{
    public function testAuthorize()
    {
        $gateway = new Gateway('username', Environment::TEST_SERVER);
        $authorizationRequest = new AuthorizationRequest();
        $result = $gateway->authorize($authorizationRequest);
        $this->assertInstanceOf('\Cobrebem\Entity\CreditCard\Authorization\Response', $result);
    }

    public function testAuthorizeRecurrent()
    {
        $gateway = new Gateway('username', Environment::TEST_SERVER);
        $recurrentRequest = new RecurrentRequest();
        $result = $gateway->authorizeRecurrent($recurrentRequest);
        $this->assertInstanceOf('\Cobrebem\Entity\CreditCard\Authorization\Response', $result);
    }

    public function testCapture()
    {
        $gateway = new Gateway('username', Environment::TEST_SERVER);
        $captureRequest = new CaptureRequest();
        $result = $gateway->capture($captureRequest);
        $this->assertInstanceOf('\Cobrebem\Entity\CreditCard\Capture\Response', $result);
    }

}
