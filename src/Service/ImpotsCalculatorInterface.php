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
     * @return float
     */
    public function getCa();

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

    /**
     * @return RateInterface
     */
    public function getEntreprise();

}