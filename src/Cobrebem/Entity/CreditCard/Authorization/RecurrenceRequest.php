<?php

namespace Cobrebem\Entity\CreditCard\Authorization;

/**
 * Authorization Recurrence Request
 *
 * @author Carlos Cima
 */
class RecurrenceRequest
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
     * @return \Cobrebem\Entity\CreditCard\Authorization\RecurrenceRequest
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
     * @return \Cobrebem\Entity\CreditCard\Authorization\RecurrenceRequest
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
     * @return \Cobrebem\Entity\CreditCard\Authorization\RecurrenceRequest
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
     * @return \Cobrebem\Entity\CreditCard\Authorization\RecurrenceRequest
     */
    public function setParcelamentoAdministradora($parcelamentoAdministradora)
    {
        $this->parcelamentoAdministradora = $parcelamentoAdministradora;
        return $this;
    }

}
