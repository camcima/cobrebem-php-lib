<?php

namespace Cobrebem\Entity\CreditCard\Capture;

/**
 * Capture Request
 *
 * @author Carlos Cima
 */
class Request
{
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
     * @return \Cobrebem\Entity\CreditCard\Capture\Request
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;
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
     * @return \Cobrebem\Entity\CreditCard\Capture\Request
     */
    public function setValorDocumento($ValorDocumento)
    {
        $this->ValorDocumento = $ValorDocumento;
        return $this;
    }
}
