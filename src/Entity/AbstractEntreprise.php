<?php

namespace Entity;

/**
 * Class Entreprise
 *
 * @author Seif
 */
abstract class AbstractEntreprise implements RateInterface
{
    /**
     * @var string
     */
    protected $siretNum;
    /**
     * @var string
     */
    protected $denomination;

    /**
     * @var string
     */
    protected $type;

    /**
     * @return string
     */
    public function getSiretNum()
    {
        return $this->siretNum;
    }

    /**
     * @param string $siretNum
     */
    public function setSiretNum($siretNum)
    {
        $this->siretNum = $siretNum;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this::RATE;
    }
}
