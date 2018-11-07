<?php
/**
 * User Seif <ben.s@mipih.fr>
 * Date time: 06/11/2018 19:03
 */

namespace Service;


use Entity\RateInterface;

interface ImpotsCalculatorInterface
{
    public function calculate();

    public function getCa();

    public function setCa($ca);

    public function setEntreprise(RateInterface $entreprise);

}