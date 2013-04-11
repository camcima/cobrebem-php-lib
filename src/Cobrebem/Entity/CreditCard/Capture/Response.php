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
     * Mensagem de Erro
     * 
     * Error Message
     * 
     * @var string 
     */
    protected $mensagemErro;

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
     * @return \Cobrebem\Entity\CreditCard\Capture\Response
     */
    public function setMensagemErro($mensagemErro)
    {
        $this->mensagemErro = $mensagemErro;
        return $this;
    }
}
