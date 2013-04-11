<?php

namespace Cobrebem\Entity\CreditCard\Authorization;

/**
 * Authorization Scheduling Request
 *
 * @author Carlos Cima
 */
class SchedulingRequest
{
    // Scheduling Operations Constant
    const OPERATION_INCLUDE = 'I';
    const OPERATION_UPDATE = 'A';
    const OPERATION_EXCLUDE = 'E';

    /**
     * Agendamento
     * 
     * Optional
     * 
     * Scheduling operation to perform. Used to include, update or exclude a scheduling.
     * 
     * Formatting: One character only : I (Include), A (Update) or E (Exclude)
     * 
     * @var string 
     */
    protected $agendamento;

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
     * Dia para Agendar
     * 
     * Mandatory if Agendamento = 'I'
     * 
     * Day of month that the charge is due
     * 
     * Formatting: dd
     * 
     * @var int 
     */
    protected $diaParaAgendar;

    /**
     * Quantidade de Meses para Agendar
     * 
     * Mandatory if Agendamento = 'I'
     * 
     * Number of Months in which to apply the charge
     * 
     * Formatting: 2 numeric digits
     * 
     * @var int
     */
    protected $quantidadeMesesParaAgendar;

    /**
     * Número de Tentativas Quando Não Aprovado
     * 
     * Mandatory if Agendamento = 'I'
     * 
     * Number of retries to approve
     * 
     * Formatting: 2 numeric digits
     * 
     * @var int
     */
    protected $numeroTentativasNaoAprovado;

    /**
     * Quantidade de Dias entre as Tentativas
     * 
     * Mandatory if Agendamento = 'I'
     * 
     * Interval between retries
     * 
     * Formatting: 2 numeric digits
     * 
     * @var int
     */
    protected $quantidadeDiasEntreTentativas;

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
     * Get Agendamento
     * 
     * Scheduling operation to perform
     * 
     * @return string
     */
    public function getAgendamento()
    {
        return $this->agendamento;
    }

    /**
     * Set Agendamento
     * 
     * @param string $agendamento Scheduling operation to perform
     * @return \Cobrebem\Entity\CreditCard\Authorization\SchedulingRequest
     */
    public function setAgendamento($agendamento)
    {
        $this->agendamento = $agendamento;
        return $this;
    }

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
     * @return \Cobrebem\Entity\CreditCard\Authorization\SchedulingRequest
     */
    public function setTransacaoAnterior($transacaoAnterior)
    {
        $this->transacaoAnterior = $transacaoAnterior;
        return $this;
    }

    /**
     * Get Dia para Agendar
     * 
     * Day of month that the charge is due
     * 
     * @return int
     */
    public function getDiaParaAgendar()
    {
        return $this->diaParaAgendar;
    }

    /**
     * Set Dia para Agendar
     * 
     * @param int $diaParaAgendar Day of month that the charge is due
     * @return \Cobrebem\Entity\CreditCard\Authorization\SchedulingRequest
     */
    public function setDiaParaAgendar($diaParaAgendar)
    {
        $this->diaParaAgendar = $diaParaAgendar;
        return $this;
    }

    /**
     * Get Quantidade de Meses para Agendar
     * 
     * Number of Months in which to apply the charge
     * 
     * @return int
     */
    public function getQuantidadeMesesParaAgendar()
    {
        return $this->quantidadeMesesParaAgendar;
    }

    /**
     * Set Quantidade de Meses para Agendar
     * 
     * @param int $quantidadeMesesParaAgendar Number of Months in which to apply the charge
     * @return \Cobrebem\Entity\CreditCard\Authorization\SchedulingRequest
     */
    public function setQuantidadeMesesParaAgendar($quantidadeMesesParaAgendar)
    {
        $this->quantidadeMesesParaAgendar = $quantidadeMesesParaAgendar;
        return $this;
    }

    /**
     * Get Número de Tentativas Quando Não Aprovado
     * 
     * Number of retries to approve
     * 
     * @return int
     */
    public function getNumeroTentativasNaoAprovado()
    {
        return $this->numeroTentativasNaoAprovado;
    }

    /**
     * Set Número de Tentativas Quando Não Aprovado
     * 
     * @param int $numeroTentativasNaoAprovado Number of retries to approve
     * @return \Cobrebem\Entity\CreditCard\Authorization\SchedulingRequest
     */
    public function setNumeroTentativasNaoAprovado($numeroTentativasNaoAprovado)
    {
        $this->numeroTentativasNaoAprovado = $numeroTentativasNaoAprovado;
        return $this;
    }

    /**
     * Get Quantidade de Dias entre as Tentativas
     * 
     * Interval in days between tries
     * 
     * @return int
     */
    public function getQuantidadeDiasEntreTentativas()
    {
        return $this->quantidadeDiasEntreTentativas;
    }

    /**
     * Set Quantidade de Dias entre as Tentativas
     * 
     * @param int $quantidadeDiasEntreTentativas Interval in days between tries
     * @return \Cobrebem\Entity\CreditCard\Authorization\SchedulingRequest
     */
    public function setQuantidadeDiasEntreTentativas($quantidadeDiasEntreTentativas)
    {
        $this->quantidadeDiasEntreTentativas = $quantidadeDiasEntreTentativas;
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
     * @return \Cobrebem\Entity\CreditCard\Authorization\SchedulingRequest
     */
    public function setParcelamentoAdministradora($parcelamentoAdministradora)
    {
        $this->parcelamentoAdministradora = $parcelamentoAdministradora;
        return $this;
    }
}
