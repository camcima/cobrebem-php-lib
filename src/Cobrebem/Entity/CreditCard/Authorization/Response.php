<?php

namespace Cobrebem\Entity\CreditCard\Authorization;

/**
 * Authorization Response
 *
 * @author Carlos Cima
 * @todo Implement AVS (address verification) Response
 */
class Response
{
    /**
     * Transação Aprovada
     * 
     * Mandatory
     * 
     * Transaction Result
     * 
     * Formatting: True or False
     * 
     * @var boolean 
     */
    protected $transacaoAprovada;

    /**
     * Resultado da Solicitação de Aprovação
     * 
     * Mandatory
     * 
     * Request result description
     * 
     * Formatting: Varchar text
     * 
     * @var string 
     */
    protected $resultadoSolicitacaoAprovacao;

    /**
     * Código de Autorização
     * 
     * Mandatory, if approved
     * 
     * Authorization code returned by the  credit card issuer
     * 
     * Formatting: 6 digits text
     * 
     * @var string 
     */
    protected $codigoAutorizacao;

    /**
     * ID da Transação
     * 
     * Mandatory
     * 
     * Aprova Facil transaction ID
     * 
     * Formatting: 14 text digits
     * 
     * @var string 
     */
    protected $transacao;

    /**
     * Cartão Mascarado
     * 
     * Mandatory
     * 
     * Masked credit card number
     * 
     * Formatting: up   to   19   numeric  digits
     * 
     * @var string 
     */
    protected $cartaoMascarado;

    /**
     * Número do Documento
     * 
     * Optional
     * 
     * Company Order ID
     * 
     * Formatting: up to 50 characters
     * 
     * @var string 
     */
    protected $numeroDocumento;

    /**
     * Adquirente utilizado na transação
     * 
     * Optional
     * 
     * Acquirer used for transaction
     * 
     * Formatting: REDECARD, CIELO
     * 
     * @var string 
     */
    protected $adquirente;

    /**
     * NSU da Transação
     * 
     * Optional
     * 
     * Issuer approval number
     * 
     * Formatting: 6 numeric digits
     * 
     * @var string 
     */
    protected $numeroSequencialUnico;

    /**
     * Comprovante da Administradora
     * 
     * Optional
     * 
     * Issuer confirmation Text
     * 
     * Formatting: Varchar text
     * 
     * @var boolean 
     */
    protected $comprovanteAdministradora;

    /**
     * Nacionalidade do Emissor
     * 
     * Optional
     * 
     * Issuer country
     * 
     * Formatting: null text
     * 
     * @var boolean 
     */
    protected $nacionalidadeEmissor;

    /**
     * Get Transação Aprovada
     * 
     * Transaction result
     * 
     * @return boolean
     */
    public function getTransacaoAprovada()
    {
        return $this->transacaoAprovada;
    }

    /**
     * Set Transação Aprovada
     * 
     * @param boolean $transacaoAprovada Transaction result
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function setTransacaoAprovada($transacaoAprovada)
    {
        $this->transacaoAprovada = $transacaoAprovada;
        return $this;
    }

    /**
     * Get Resultado da Solicitação de Aprovação
     * 
     * Request result description
     * 
     * @return string
     */
    public function getResultadoSolicitacaoAprovacao()
    {
        return $this->resultadoSolicitacaoAprovacao;
    }

    /**
     * Set Resultado da Solicitação de Aprovação
     * 
     * @param string $resultadoSolicitacaoAprovacao Request result description
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function setResultadoSolicitacaoAprovacao($resultadoSolicitacaoAprovacao)
    {
        $this->resultadoSolicitacaoAprovacao = $resultadoSolicitacaoAprovacao;
        return $this;
    }

    /**
     * Get Código de Autorização
     * 
     * Authorization code returned by the  credit card issuer
     * 
     * @return string
     */
    public function getCodigoAutorizacao()
    {
        return $this->codigoAutorizacao;
    }

    /**
     * Set Código de Autorização
     * 
     * @param string $codigoAutorizacao Authorization code returned by the  credit card issuer
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function setCodigoAutorizacao($codigoAutorizacao)
    {
        $this->codigoAutorizacao = $codigoAutorizacao;
        return $this;
    }

    /**
     * Get ID da Transação
     * 
     * Aprova Facil transaction ID
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
     * @param string $transacao Aprova Facil transaction ID
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function setTransacao($transacao)
    {
        $this->transacao = $transacao;
        return $this;
    }

    /**
     * Get Cartão Mascarado
     * 
     * Masked credit card number
     * 
     * @return string
     */
    public function getCartaoMascarado()
    {
        return $this->cartaoMascarado;
    }

    /**
     * Set Cartão Mascarado
     * 
     * @param string $cartaoMascarado Masked credit card number
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function setCartaoMascarado($cartaoMascarado)
    {
        $this->cartaoMascarado = $cartaoMascarado;
        return $this;
    }

    /**
     * Get Número do Documento
     * 
     * Company Order ID
     * 
     * @return string
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * Set Número do Documento
     * 
     * @param string $numeroDocumento Company Order ID
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;
        return $this;
    }

    /**
     * Get Adquirente
     * 
     * Acquirer used for transaction
     * 
     * @return string
     */
    public function getAdquirente()
    {
        return $this->adquirente;
    }

    /**
     * Set Adquirente
     * 
     * @param string $adquirente Acquirer used for transaction
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function setAdquirente($adquirente)
    {
        $this->adquirente = $adquirente;
        return $this;
    }

    /**
     * Get NSU da Transação
     * 
     * Issuer approval number
     * 
     * @return string
     */
    public function getNumeroSequencialUnico()
    {
        return $this->numeroSequencialUnico;
    }

    /**
     * Set NSU da Transação
     * 
     * @param string $numeroSequencialUnico Issuer approval number
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function setNumeroSequencialUnico($numeroSequencialUnico)
    {
        $this->numeroSequencialUnico = $numeroSequencialUnico;
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
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function setComprovanteAdministradora($comprovanteAdministradora)
    {
        $this->comprovanteAdministradora = $comprovanteAdministradora;
        return $this;
    }

    /**
     * Get Nacionalidad do Emissor
     * 
     * Issuer country
     * 
     * @return string
     */
    public function getNacionalidadeEmissor()
    {
        return $this->nacionalidadeEmissor;
    }

    /**
     * Set Nacionalidad do Emissor
     * 
     * @param string $nacionalidadeEmissor Issuer country
     * @return \Cobrebem\Entity\CreditCard\Authorization\Response
     */
    public function setNacionalidadeEmissor($nacionalidadeEmissor)
    {
        $this->nacionalidadeEmissor = $nacionalidadeEmissor;
        return $this;
    }
}
