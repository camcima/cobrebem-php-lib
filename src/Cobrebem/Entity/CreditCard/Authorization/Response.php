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
    protected $transacaoAprovada;
    protected $resultadoSolicitacaoAprovacao;
    protected $codigoAutorizacao;
    protected $transacao;
    protected $cartaoMascarado;
    protected $numeroDocumento;
    protected $adquirente;
    protected $numeroSequencialUnico;
    protected $comprovanteAdministradora;
    protected $nacionalidadeEmissor;

    public function getTransacaoAprovada()
    {
        return $this->transacaoAprovada;
    }

    public function setTransacaoAprovada($transacaoAprovada)
    {
        $this->transacaoAprovada = $transacaoAprovada;
        return $this;
    }

    public function getResultadoSolicitacaoAprovacao()
    {
        return $this->resultadoSolicitacaoAprovacao;
    }

    public function setResultadoSolicitacaoAprovacao($resultadoSolicitacaoAprovacao)
    {
        $this->resultadoSolicitacaoAprovacao = $resultadoSolicitacaoAprovacao;
        return $this;
    }

    public function getCodigoAutorizacao()
    {
        return $this->codigoAutorizacao;
    }

    public function setCodigoAutorizacao($codigoAutorizacao)
    {
        $this->codigoAutorizacao = $codigoAutorizacao;
        return $this;
    }

    public function getTransacao()
    {
        return $this->transacao;
    }

    public function setTransacao($transacao)
    {
        $this->transacao = $transacao;
        return $this;
    }

    public function getCartaoMascarado()
    {
        return $this->cartaoMascarado;
    }

    public function setCartaoMascarado($cartaoMascarado)
    {
        $this->cartaoMascarado = $cartaoMascarado;
        return $this;
    }

    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;
        return $this;
    }

    public function getAdquirente()
    {
        return $this->adquirente;
    }

    public function setAdquirente($adquirente)
    {
        $this->adquirente = $adquirente;
        return $this;
    }

    public function getNumeroSequencialUnico()
    {
        return $this->numeroSequencialUnico;
    }

    public function setNumeroSequencialUnico($numeroSequencialUnico)
    {
        $this->numeroSequencialUnico = $numeroSequencialUnico;
        return $this;
    }

    public function getComprovanteAdministradora()
    {
        return $this->comprovanteAdministradora;
    }

    public function setComprovanteAdministradora($comprovanteAdministradora)
    {
        $this->comprovanteAdministradora = $comprovanteAdministradora;
        return $this;
    }

    public function getNacionalidadeEmissor()
    {
        return $this->nacionalidadeEmissor;
    }

    public function setNacionalidadeEmissor($nacionalidadeEmissor)
    {
        $this->nacionalidadeEmissor = $nacionalidadeEmissor;
        return $this;
    }

}
