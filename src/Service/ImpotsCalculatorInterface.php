<?php

namespace Service;

use Entity\RateInterface;

/**
 * Interface ImpotsCalculatorInterface
 *
 * @package Service
 * @author  Seif
 */
interface ImpotsCalculatorInterface
{
    /**
     * @return float
     */
    public function calculate();

    /**
     * @param float $ca
     *
     * @return mixed
     */
    public function setCa($ca);

    /**
     * @param RateInterface $entreprise
     *
     * @return mixed
     */
    public function setEntreprise(RateInterface $entreprise);

}