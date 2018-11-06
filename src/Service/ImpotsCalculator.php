<?php
/**
 * User Seif <ben.s@mipih.fr>
 * Date time: 06/11/2018 19:02
 */

namespace Service;

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

    public function calculate()
    {
        // TODO: Implement calculate() method.
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

    /**
     * @return int
     */
    public function get()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}