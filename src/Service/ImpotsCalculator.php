<?php

namespace Service;

use Entity\RateInterface;
use Exception\CaInvalidValue;
use Exception\EntrepriseUndefined;

/**
 * Class ImpotsCalculator
 *
 * @package Service
 * @author  Seif
 */
class ImpotsCalculator implements ImpotsCalculatorInterface
{
    /**
     * @var float;
     */
    protected $ca = 0;
    /**
     * @var integer
     */
    protected $type;
    /**
     * @var RateInterface
     */
    protected $entreprise;

    /**
     * Calcul de l'impôt de l'entreperise courante
     *
     * @return float
     * @throws EntrepriseUndefined
     */
    public function calculate()
    {
        if (!$this->hasEntreprise()) {
            throw new EntrepriseUndefined(AppMessages::EXC_ENTREPRISE_OBJECT_UNDEFINED);
        }
        $rate = $this->getEntreprise()->getRate();

        return $this->getCa() * $rate * 0.01;
    }

    /**
     * @return float
     */
    public function getCa()
    {
        return $this->ca;
    }

    /**
     * @param float $ca
     *
     * @return $this|mixed
     * @throws CaInvalidValue
     */
    public function setCa($ca)
    {
        if (!is_float($ca) || $ca < 0) {
            throw new CaInvalidValue(AppMessages::EXC_CA_INVALID_VALUE);
        }
        $this->ca = $ca;

        return $this;
    }

    /**
     * @return RateInterface
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param RateInterface $entreprise
     *
     * @return $this|mixed
     */
    public function setEntreprise(RateInterface $entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasEntreprise()
    {
        return !is_null($this->getEntreprise());
    }

}