<?php

namespace Cobrebem\Service;

use Cobrebem\Entity\CreditCard\Authorization\Request as AuthorizationRequest;
use Cobrebem\Entity\CreditCard\Authorization\RecurrentRequest;
use Cobrebem\Entity\CreditCard\Authorization\SchedulingRequest;

/**
 * Gateway Helper
 *
 * @author Carlos Cima
 */
class GatewayHelper
{
    /**
     * Build Authorization Request Parameters Array
     * 
     * @param \Cobrebem\Entity\CreditCard\Authorization\Request $authorizationRequest
     * @return array
     */
    public function buildAuthorizationRequestArray(AuthorizationRequest $authorizationRequest)
    {
        $parameters = array();
        $this->insertParameter(
            $parameters, 'NumeroDocumento', $authorizationRequest->getNumeroDocumento(), false
        );
        $this->insertParameter(
            $parameters, 'ValorDocumento', $this->formatCurrency($authorizationRequest->getValorDocumento())
        );
        $this->insertParameter(
            $parameters, 'ValorEntrada', $this->formatCurrency($authorizationRequest->getValorEntrada()), false
        );
        $this->insertParameter(
            $parameters, 'QuantidadeParcelas', $this->formatInteger($authorizationRequest->getQuantidadeParcelas(), 2)
        );
        $this->insertParameter(
            $parameters, 'NumeroCartao', $authorizationRequest->getNumeroCartao()
        );
        $this->insertParameter(
            $parameters, 'MesValidade', $this->formatInteger($authorizationRequest->getMesValidade(), 2)
        );
        $this->insertParameter(
            $parameters, 'AnoValidade', $this->formatYear($authorizationRequest->getAnoValidade())
        );
        $this->insertParameter(
            $parameters, 'CodigoSeguranca', $authorizationRequest->getCodigoSeguranca(), false
        );
        $this->insertParameter(
            $parameters, 'PreAutorizacao', $this->formatBoolean($authorizationRequest->getPreAutorizacao()), false
        );
        $this->insertParameter(
            $parameters, 'EnderecoIPComprador', $authorizationRequest->getEnderecoIpComprador()
        );
        $this->insertParameter(
            $parameters, 'NomePortadorCartao', $authorizationRequest->getNomePortadorCartao(), false
        );
        $this->insertParameter(
            $parameters, 'Bandeira', $authorizationRequest->getBandeira(), false
        );
        $this->insertParameter(
            $parameters, 'Adquirente', $authorizationRequest->getAdquirente(), false
        );
        $this->insertParameter(
            $parameters, 'CPFPortadorCartao', $authorizationRequest->getCpfPortadorCartao(), false
        );
        $this->insertParameter(
            $parameters, 'DataNascimentoPortadorCartao', $this->formatDate($authorizationRequest->getDataNascimentoPortadorCartao()), false
        );
        $this->insertParameter(
            $parameters, 'ParcelamentoAdministradora', $this->formatBoolean($authorizationRequest->getParcelamentoAdministradora()), false
        );
        $this->insertParameter(
            $parameters, 'Moeda', $authorizationRequest->getMoeda(), false
        );

        if ($authorizationRequest->getSchedulingRequest() instanceof SchedulingRequest) {

            // If scheduling, the parameter NumeroDocumento is mandatory
            $this->insertParameter(
                $parameters, 'NumeroDocumento', $authorizationRequest->getNumeroDocumento()
            );

            $schedulingRequest = $authorizationRequest->getSchedulingRequest();
            $this->insertParameter(
                $parameters, 'Agendamento', $schedulingRequest->getAgendamento(), false
            );

            if ($schedulingRequest->getAgendamento() == SchedulingRequest::OPERATION_UPDATE ||
                $schedulingRequest->getAgendamento() == SchedulingRequest::OPERATION_EXCLUDE) {
                $this->insertParameter(
                    $parameters, 'TransacaoAnterior', $schedulingRequest->getTransacaoAnterior()
                );
            }
            if ($schedulingRequest->getAgendamento() == SchedulingRequest::OPERATION_INCLUDE) {
                $this->insertParameter(
                    $parameters, 'DiaParaAgendar', $this->formatInteger($schedulingRequest->getDiaParaAgendar(), 2)
                );
                $this->insertParameter(
                    $parameters, 'QuantidadeMesesParaAgendar', $this->formatInteger($schedulingRequest->getQuantidadeMesesParaAgendar(), 2)
                );
                $this->insertParameter(
                    $parameters, 'NumeroTentativasNaoAprovado', $this->formatInteger($schedulingRequest->getNumeroTentativasNaoAprovado(), 2)
                );
                $this->insertParameter(
                    $parameters, 'QuantidadeDiasEntreTentativas', $this->formatInteger($schedulingRequest->getQuantidadeDiasEntreTentativas(), 2)
                );
            }
            $this->insertParameter(
                $parameters, 'ParcelamentoAdministradora', $this->formatBoolean($schedulingRequest->getParcelamentoAdministradora()), false
            );
        }

        return $parameters;
    }

    /**
     * Build Recurrent Authorization Request Parameters Array
     * 
     * @param \Cobrebem\Entity\CreditCard\Authorization\RecurrentRequest $recurrentRequest
     * @return array
     */
    public function buildRecurrentAuthorizationRequestArray(RecurrentRequest $recurrentRequest)
    {
        $parameters = array();
        $this->insertParameter(
            $parameters, 'NumeroDocumento', $recurrentRequest->getNumeroDocumento(), false
        );
        $this->insertParameter(
            $parameters, 'ValorDocumento', $this->formatCurrency($recurrentRequest->getValorDocumento())
        );
        $this->insertParameter(
            $parameters, 'QuantidadeParcelas', $this->formatInteger($recurrentRequest->getQuantidadeParcelas(), 2)
        );
        $this->insertParameter(
            $parameters, 'TransacaoAnterior', $recurrentRequest->getTransacaoAnterior()
        );
        $this->insertParameter(
            $parameters, 'ParcelamentoAdministradora', $recurrentRequest->getParcelamentoAdministradora(), false
        );

        return $parameters;
    }

    /**
     * Format Currency according to Cobrebem Standards
     * 
     * @param float $amount
     * @return string
     */
    protected function formatCurrency($amount)
    {
        if (!is_numeric($amount)) {
            return $amount;
        }

        $formattedCurrency = number_format($amount, 2, '.', '');

        return $formattedCurrency;
    }

    /**
     * Format Integer by Padding Zeroes
     * 
     * @param int $value
     * @param int $length
     * @return string
     */
    protected function formatInteger($value, $length)
    {
        if (!is_numeric($value)) {
            return $value;
        }

        $formattedInteger = str_pad(intval($value), $length, '0', STR_PAD_LEFT);

        return $formattedInteger;
    }

    /**
     * Format Date according to Cobrebem Standards
     * 
     * @param \DateTime $date
     * @return string
     */
    protected function formatDate($date)
    {
        if ($date instanceof \DateTime) {
            return $date->format('Ymd');
        }

        return $date;
    }

    /**
     * Format Year according to Cobrebem Standards
     * 
     * @param int $year
     * @return string
     */
    protected function formatYear($year)
    {
        if (is_numeric($year) && strlen($year) == 4) {
            return substr($year, -2);
        }

        return $year;
    }

    /**
     * Format Boolean according to Cobrebem Standards
     * 
     * @param boolean $year
     * @return string
     */
    protected function formatBoolean($value)
    {
        if (is_bool($value)) {
            if ($value) {
                return 'S';
            }
            return 'N';
        }

        return $value;
    }

    /**
     * Insert new key in array if value is not null nor empty
     * 
     * @param array $array
     * @param string $key
     * @param mixed $value
     * @param boolean $always Always insert parameter, even if empty
     */
    protected function insertParameter(&$array, $key, $value, $always = true)
    {
        if ($always || (!is_null($value) && strlen($value) > 0)) {
            $array[$key] = $value;
        }
    }

}
