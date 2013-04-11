<?php

namespace Cobrebem\Entity\CreditCard\Cancellation;

/**
 * Cancellation Response
 *
 * @author Carlos Cima
 */
class Response
{
    /**
     * Transação cancelada com sucesso
     * 
     * Successful Cancellation
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
     * NSU do Cancelamento
     * 
     * Cancellation NSU (Unique Serial Number)
     * 
     * @var string 
     */
    protected $nsuCancelamento;

    /**
     * Mensagem de Erro
     * 
     * Error Message
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
     * Successful Cancellation
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
     * @param boolean $success Successful Cancellation
     * @return \Cobrebem\Entity\CreditCard\Cancellation\Response
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
     * @return \Cobrebem\Entity\CreditCard\Cancellation\Request
     */
    public function setTransacao($transacao)
    {
        $this->transacao = $transacao;
        return $this;
    }

    /**
     * Get NSU do Cancelamento
     * 
     * Cancellation NSU
     * 
     * @return string
     */
    public function getNsuCancelamento()
    {
        return $this->nsuCancelamento;
    }

    /**
     * Set NSU do Cancelamento
     * 
     * @param string $nsuCancelamento Cancellation NSU
     * @return \Cobrebem\Entity\CreditCard\Cancellation\Response
     */
    public function setNsuCancelamento($nsuCancelamento)
    {
        $this->nsuCancelamento = $nsuCancelamento;
        return $this;
    }

    /**
     * Get Mensagem de Erro
     * 
     * Error Message
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
     * @param type $mensagemErro Error Message
     * @return \Cobrebem\Entity\CreditCard\Cancellation\Response
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
