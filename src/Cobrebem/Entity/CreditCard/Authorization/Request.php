<?php

namespace Cobrebem\Entity\CreditCard\Authorization;

/**
 * Authorization Request
 *
 * @author Carlos Cima
 * @todo Implement AVS (address verification) Request
 */
class Request
{
    // Supported Credit Card Brands
    const BRAND_VISA = 'VISA';
    const BRAND_MASTERCARD = 'MASTERCARD';
    const BRAND_DINERS = 'DINERS';
    const BRAND_AMEX = 'AMEX';
    const BRAND_HIPERCARD = 'HIPERCARD';
    const BRAND_JCB = 'JCB';
    const BRAND_SOROCRED = 'SOROCRED';
    const BRAND_AURA = 'AURA';

    // Supported Acquirers
    const ACQUIRER_REDERCARD = 'REDECARD';
    const ACQUIRER_CIELO = 'CIELO';

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
     * Valor de Entrada
     * 
     * Optional
     * 
     * Boarding fee
     * 
     * To be used only by Airlines. The use of this parameter needs to be enabled by Cobre Bem Tecnologia.
     * 
     * Formatting: numeric with 2 decimal digits (decimal separator is a dot)
     * 
     * @var float
     */
    protected $valorEntrada;

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
     * Número do Cartão de Crédito
     * 
     * Mandatory
     * 
     * Credit card number
     * 
     * Formatting: up to 19 numeric digits
     * 
     * @var string 
     */
    protected $numeroCartao;

    /**
     * Mês de Validade do Cartão
     * 
     * Mandatory
     * 
     * Credit card expiration month
     * 
     * Formatting: 2 numeric digits
     * 
     * @var int 
     */
    protected $mesValidade;

    /**
     * Ano de Validade do Cartão
     * 
     * Mandatory
     * 
     * Credit card expiration year
     * 
     * Formatting: 2 numeric digits
     * 
     * @var int 
     */
    protected $anoValidade;

    /**
     * Código de Segurança do Cartão
     * 
     * Mandatory, only when technology is not Komerci WebService.
     * As ruled by Redecard CVV2 cannot be captured if you are using Komerci Web Service Technology.
     * 
     * Credit card CVC2 or CVV2
     * 
     * Formatting: up to 4 numeric digits
     * 
     * @var string 
     */
    protected $codigoSeguranca;

    /**
     * Somente Pré-Autorização?
     * 
     * Optional
     * 
     * Pre Authorize Only?
     * 
     * Pre authorization is the temporary reserve of a certain amount on a credit card, in order to
     * guarantee its availability. This resource can be used with Komerci and Komerci WebService technologies
     * (Redecard). This type of sales resource is only used in special projects where preauthorization
     * is necessary.
     * 
     * Formatting: Character S=Yes and N=No
     * 
     * @var boolean 
     */
    protected $preAutorizacao;

    /**
     * Endereço IP do Comprador
     * 
     * Mandatory
     * 
     * Buyer's IP address
     * 
     * Formatting: 000.000.000.000
     * 
     * @var string 
     */
    protected $enderecoIpComprador;

    /**
     * Nome do Portador do Cartão
     * 
     * Optional
     * 
     * Name as Written on Card
     * 
     * Formatting: Up to 50 Alphanumeric Characters
     * 
     * @var string 
     */
    protected $nomePortadorCartao;

    /**
     * Bandeira do Cartão
     * 
     * Optional
     * 
     * Credit Card Brand
     * 
     * Formatting: VISA, MASTERCARD, DINERS, AMEX, HIPERCARD, JCB, SOROCRED, AURA
     * 
     * @var string 
     */
    protected $bandeira;

    /**
     * Adquirente Preferencial
     * 
     * Optional
     * 
     * Preferred acquirer for the transaction
     * 
     * Formatting: REDECARD, CIELO
     * 
     * @var string 
     */
    protected $adquirente;

    /**
     * CPF/CNPJ do Portador do Cartão
     * 
     * Optional
     * 
     * Card holder CPF/CNPJ
     * 
     * Formatting: 14 numeric digits (CNPJ) or 11 numeric digits (CPF)
     * 
     * @var string 
     */
    protected $cpfPortadorCartao;

    /**
     * Data de Nascimento do Portador do Cartão
     * 
     * Optional
     * 
     * Card holder birth date
     * 
     * Formatting: yyyymmdd
     * 
     * @var \DateTime 
     */
    protected $dataNascimentoPortadorCartao;

    /**
     * Ativar Parcelamento pela Administadora
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
     * Moeda Utilizada na Transação
     * 
     * Optional. If not informed, it is assumed the value BRL.
     * 
     * Currency used in the sale
     * 
     * Formatting: Valid values: BRL, MXN, CLP (Other ISO values for definitions of currency ISO 4217)
     * 
     * @var string 
     */
    protected $moeda;
    
    /**
     * Agendamento da Transação
     * 
     * Optional
     * 
     * Scheduling Request Details
     * 
     * @var \Cobrebem\Entity\CreditCard\Authorization\SchedulingRequest
     */
    protected $schedulingRequest;

    /**
     * Get Numero do Documento
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
     * Set Numero do Documento
     * 
     * @param string $numeroDocumento Company Order ID (up to 50 characters)
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;
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
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setValorDocumento($ValorDocumento)
    {
        $this->ValorDocumento = $ValorDocumento;
        return $this;
    }

    /**
     * Get Valor Entrada
     * 
     * Boarding fee
     * 
     * @return float
     */
    public function getValorEntrada()
    {
        return $this->valorEntrada;
    }

    /**
     * Set Valor Entrada
     * 
     * @param float $valorEntrada Boarding fee
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setValorEntrada($valorEntrada)
    {
        $this->valorEntrada = $valorEntrada;
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
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setQuantidadeParcelas($quantidadeParcelas)
    {
        $this->quantidadeParcelas = $quantidadeParcelas;
        return $this;
    }

    /**
     * Get Número do Cartão
     * 
     * Credit card number
     * 
     * @return string
     */
    public function getNumeroCartao()
    {
        return $this->numeroCartao;
    }

    /**
     * Set Número do Cartão
     * 
     * @param string $numeroCartao Credit card number
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setNumeroCartao($numeroCartao)
    {
        $this->numeroCartao = $numeroCartao;
        return $this;
    }

    /**
     * Get Mês Validade
     * 
     * Credit card expiration month
     * 
     * @return int
     */
    public function getMesValidade()
    {
        return $this->mesValidade;
    }

    /**
     * Set Mês Validade
     * 
     * @param int $mesValidade Credit card expiration month
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setMesValidade($mesValidade)
    {
        $this->mesValidade = $mesValidade;
        return $this;
    }

    /**
     * Get Ano Validade
     * 
     * Credit card expiration year
     * 
     * @return int
     */
    public function getAnoValidade()
    {
        return $this->anoValidade;
    }

    /**
     * Set Ano Validade
     * 
     * @param int $anoValidade Credit card expiration year
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setAnoValidade($anoValidade)
    {
        $this->anoValidade = $anoValidade;
        return $this;
    }

    /**
     * Get Código de Segurança
     * 
     * Credit card CVC2 or CVV2
     * 
     * @return string
     */
    public function getCodigoSeguranca()
    {
        return $this->codigoSeguranca;
    }

    /**
     * Set Código de Segurança
     * 
     * @param string $codigoSeguranca Credit card CVC2 or CVV2
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setCodigoSeguranca($codigoSeguranca)
    {
        $this->codigoSeguranca = $codigoSeguranca;
        return $this;
    }

    /**
     * Get Pré-Autorização
     * 
     * Pre Authorize Only?
     * 
     * @return boolean
     */
    public function getPreAutorizacao()
    {
        return $this->preAutorizacao;
    }

    /**
     * Set Pré-Autorização
     * 
     * @param boolean $preAutorizacao Pre Authorize Only?
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setPreAutorizacao($preAutorizacao)
    {
        $this->preAutorizacao = $preAutorizacao;
        return $this;
    }

    /**
     * Get Endereço IP do Comprador
     * 
     * Buyer's IP address
     * 
     * @return string
     */
    public function getEnderecoIpComprador()
    {
        return $this->enderecoIpComprador;
    }

    /**
     * Set Endereço IP do Comprador
     * 
     * @param string $enderecoIpComprador Buyer's IP address
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setEnderecoIpComprador($enderecoIpComprador)
    {
        $this->enderecoIpComprador = $enderecoIpComprador;
        return $this;
    }

    /**
     * Get Nome do Portador do Cartão
     * 
     * Name as Written on Card
     * 
     * @return string
     */
    public function getNomePortadorCartao()
    {
        return $this->nomePortadorCartao;
    }

    /**
     * Set Nome do Portador do Cartão
     * 
     * @param string $nomePortadorCartao Name as Written on Card
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setNomePortadorCartao($nomePortadorCartao)
    {
        $this->nomePortadorCartao = $nomePortadorCartao;
        return $this;
    }

    /**
     * Get Bandeira
     * 
     * Credit Card Brand
     * 
     * @return string
     */
    public function getBandeira()
    {
        return $this->bandeira;
    }

    /**
     * Set Bandeira
     * 
     * @param string $bandeira Credit Card Brand
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setBandeira($bandeira)
    {
        $this->bandeira = $bandeira;
        return $this;
    }

    /**
     * Get Adquirente
     * 
     * Preferred acquirer for the transaction
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
     * @param string $adquirente Preferred acquirer for the transaction
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setAdquirente($adquirente)
    {
        $this->adquirente = $adquirente;
        return $this;
    }

    /**
     * Get CPF/CNPJ do Portador do Cartão
     * 
     * Card holder CPF/CNPJ
     * 
     * @return string
     */
    public function getCpfPortadorCartao()
    {
        return $this->cpfPortadorCartao;
    }

    /**
     * Set CPF/CNPJ do Portador do Cartão
     * 
     * @param string $cpfPortadorCartao Card holder CPF/CNPJ
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setCpfPortadorCartao($cpfPortadorCartao)
    {
        $this->cpfPortadorCartao = $cpfPortadorCartao;
        return $this;
    }

    /**
     * Get Data de Nascimento do Portador do Cartão
     * 
     * Card holder birth date
     * 
     * @return \DateTime
     */
    public function getDataNascimentoPortadorCartao()
    {
        return $this->dataNascimentoPortadorCartao;
    }

    /**
     * Set Data de Nascimento do Portador do Cartão
     * 
     * @param \DateTime $dataNascimentoPortadorCartao Card holder birth date
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setDataNascimentoPortadorCartao(\DateTime $dataNascimentoPortadorCartao)
    {
        $this->dataNascimentoPortadorCartao = $dataNascimentoPortadorCartao;
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
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setParcelamentoAdministradora($parcelamentoAdministradora)
    {
        $this->parcelamentoAdministradora = $parcelamentoAdministradora;
        return $this;
    }

    /**
     * Get Moeda
     * 
     * Currency used in the sale
     * 
     * @return string
     */
    public function getMoeda()
    {
        return $this->moeda;
    }

    /**
     * Set Moeda
     * 
     * @param string $moeda Currency used in the sale
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setMoeda($moeda)
    {
        $this->moeda = $moeda;
        return $this;
    }
    
    /**
     * Get Agendamento da Transação
     * 
     * Scheduling Request
     * 
     * @return \Cobrebem\Entity\CreditCard\Authorization\SchedulingRequest
     */
    public function getSchedulingRequest()
    {
        return $this->schedulingRequest;
    }

    /**
     * Set Agendamento da Transação
     * 
     * @param \Cobrebem\Entity\CreditCard\Authorization\SchedulingRequest $schedulingRequest Shceduling Request
     * @return \Cobrebem\Entity\CreditCard\Authorization\Request
     */
    public function setSchedulingRequest(SchedulingRequest $schedulingRequest)
    {
        $this->schedulingRequest = $schedulingRequest;
        return $this;
    }



}
