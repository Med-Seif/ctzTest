<?php
/**
 * User Seif <ben.s@mipih.fr>
 * Date time: 06/11/2018 19:02
 */

namespace Service;

use Entity\RateInterface;

/**
 * Class ImpotsCalculator
 *
 * @package Service
 * @author  Seif <ben.s@mipih.fr>
 */
class ImpotsCalculator implements ImpotsCalculatorInterface
{
    /**
     * @var float;
     */
    protected $ca;
    /**
     * @var integer
     */
    protected $type;
    protected $entreprise;

    public function calculate()
    {
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
     */
    public function setCa($ca)
    {
        $this->ca = $ca;
    }

    public function getEntreprise()
    {
        return $this->entreprise;
    }

    public function setEntreprise(RateInterface $entreprise)
    {
        $this->entreprise = $entreprise;
    }

}