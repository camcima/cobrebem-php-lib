<?php

namespace Cobrebem\Entity\CreditCard\Capture;

/**
 * Capture Response
 *
 * @author Carlos Cima
 */
class Response
{
    /**
     * Transação capturada com sucesso
     * 
     * Successful Capture
     * 
     * @var boolean 
     */
    protected $success;

    /**
     * ID da Transação
     * 
     * Mandatory
     * 
     * Transaction ID
     * 
     * Formatting: 14 numeric digits
     * 
     * @var string 
     */
    protected $transacao;

    /**
     * Comprovante da Administradora
     * 
     * Issuer confirmation Text
     * 
     * @var string 
     */
    protected $comprovanteAdministradora;

    /**
     * Mensagem de Erro do Gateway
     * 
     * Gateway Error Message
     * 
     * @var string 
     */
    protected $mensagemErro;

    /**
     * Has Communication Error
     * 
     * @var boolean 
     */
    protected $hasCommunicationError;

    /**
     * Communication Error Message
     * 
     * @var string 
     */
    protected $communicationErrorMessage;

    /**
     * Raw HTTP Response
     * 
     * @var string 
     */
    protected $rawResponse;

    /**
     * Get Sucesso
     * 
     * Successful Transaction
     * 
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Set Sucesso
     * 
     * @param boolean $success Successful Transaction
     * @return \Cobrebem\Entity\CreditCard\Capture\Response
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * Get ID da Transação
     * 
     * Transaction ID
     * 
     * @return string
     */
    public function getTransacao()
    {
        return $this->transacao;
    }

    /**
     * Set ID da Transação
     * 
     * @param string $transacao Transaction ID
     * @return \Cobrebem\Entity\CreditCard\Capture\Request
     */
    public function setTransacao($transacao)
    {
        $this->transacao = $transacao;
        return $this;
    }

    /**
     * Get Comprovante da Administradora
     * 
     * Issuer confirmation Text
     * 
     * @return string
     */
    public function getComprovanteAdministradora()
    {
        return $this->comprovanteAdministradora;
    }

    /**
     * Set Comprovante da Administradora
     * 
     * @param string $comprovanteAdministradora Issuer confirmation Text
     * @return \Cobrebem\Entity\CreditCard\Capture\Response
     */
    public function setComprovanteAdministradora($comprovanteAdministradora)
    {
        $this->comprovanteAdministradora = $comprovanteAdministradora;
        return $this;
    }

    /**
     * Get Mensagem de Erro do Gateway
     * 
     * Gateway Error Message
     * 
     * @return string
     */
    public function getMensagemErro()
    {
        return $this->mensagemErro;
    }

    /**
     * Set Mensagem de Erro
     * 
     * @param type $mensagemErro Gateway Error Message
     * @return \Cobrebem\Entity\CreditCard\Capture\Response
     */
    public function setMensagemErro($mensagemErro)
    {
        $this->mensagemErro = $mensagemErro;
        return $this;
    }

    /**
     * Get Has Communication Error
     * 
     * @return boolean
     */
    public function getHasCommunicationError()
    {
        return $this->hasCommunicationError;
    }

    /**
     * Set Has Communication Error
     * 
     * @param boolean $hasCommunicationError
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function setHasCommunicationError($hasCommunicationError)
    {
        $this->hasCommunicationError = $hasCommunicationError;
        return $this;
    }

    /**
     * Get Communication Error Message
     * 
     * @return string
     */
    public function getCommunicationErrorMessage()
    {
        return $this->communicationErrorMessage;
    }

    /**
     * Set Communication Error Message
     * 
     * @param string $communicationErrorMessage
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function setCommunicationErrorMessage($communicationErrorMessage)
    {
        $this->communicationErrorMessage = $communicationErrorMessage;
        return $this;
    }

    /**
     * Get Raw HTTP Response
     * 
     * @return string
     */
    public function getRawResponse()
    {
        return $this->rawResponse;
    }

    /**
     * Set Raw HTTP Response
     * 
     * @param string $rawResponse Raw HTTP Response including headers
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function setRawResponse($rawResponse)
    {
        $this->rawResponse = $rawResponse;
        return $this;
    }

}
