<?php

namespace Cobrebem\Entity\CreditCard\Authorization;

/**
 * Authorization Recurrent Request
 *
 * @author Carlos Cima
 */
class RecurrentRequest
{
    /**
     * Transação Anterior
     * 
     * Mandatory if Agendamento = 'A' or 'E'
     * 
     * Last Aprova Facil transaction ID
     * 
     * Formatting: 14 numeric digits
     * 
     * @var string 
     */
    protected $transacaoAnterior;

    /**
     * Valor do Documento
     * 
     * Mandatory
     * 
     * Transaction Amount
     * 
     * Formatting: numeric with 2 decimal digits (decimal separator is a dot)
     * 
     * @var float 
     */
    protected $ValorDocumento;

    /**
     * Quantidade de Parcelas
     * 
     * Mandatory
     * 
     * Number of Installments
     * 
     * Formatting: 2 numeric digits
     * 
     * @var int 
     */
    protected $quantidadeParcelas;

    /**
     * Parcelamento Administradora
     * 
     * Optional
     * 
     * Used to activate issuer installment
     * 
     * Formatting: One character only 'S'
     * 
     * @var boolean 
     */
    protected $parcelamentoAdministradora;

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
     * Get Transação Anterior
     * 
     * Last Aprova Facil transaction ID
     * 
     * @return string
     */
    public function getTransacaoAnterior()
    {
        return $this->transacaoAnterior;
    }

    /**
     * Set Transação Anterior
     * 
     * @param string $transacaoAnterior Last Aprova Facil transaction ID
     * @return \Cobrebem\Entity\CreditCard\Authorization\RecurrentRequest
     */
    public function setTransacaoAnterior($transacaoAnterior)
    {
        $this->transacaoAnterior = $transacaoAnterior;
        return $this;
    }

    /**
     * Get Valor do Documento
     * 
     * Transaction amount
     * 
     * @return float
     */
    public function getValorDocumento()
    {
        return $this->ValorDocumento;
    }

    /**
     * Set Valor do Documento
     * 
     * @param float $ValorDocumento Transaction amount
     * @return \Cobrebem\Entity\CreditCard\Authorization\RecurrentRequest
     */
    public function setValorDocumento($ValorDocumento)
    {
        $this->ValorDocumento = $ValorDocumento;
        return $this;
    }

    /**
     * Get Quantidade de Parcelas
     * 
     * Number of Installments
     * 
     * @return int
     */
    public function getQuantidadeParcelas()
    {
        return $this->quantidadeParcelas;
    }

    /**
     * Set Quantidade de Parcelas
     * 
     * @param int $quantidadeParcelas Number of Installments
     * @return \Cobrebem\Entity\CreditCard\Authorization\RecurrentRequest
     */
    public function setQuantidadeParcelas($quantidadeParcelas)
    {
        $this->quantidadeParcelas = $quantidadeParcelas;
        return $this;
    }

    /**
     * Get Parcelamento Administradora
     * 
     * Used to activate issuer installment
     * 
     * @return boolean
     */
    public function getParcelamentoAdministradora()
    {
        return $this->parcelamentoAdministradora;
    }

    /**
     * Set Parcelamento Administradora
     * 
     * @param boolean $parcelamentoAdministradora Used to activate issuer installment
     * @return \Cobrebem\Entity\CreditCard\Authorization\RecurrentRequest
     */
    public function setParcelamentoAdministradora($parcelamentoAdministradora)
    {
        $this->parcelamentoAdministradora = $parcelamentoAdministradora;
        return $this;
    }

    /**
     * Get Número do Documento
     * 
     * Company Order ID
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
     * @param string $numeroDocumento Company Order ID (up to 50 characters)
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;
        return $this;
    }

}
