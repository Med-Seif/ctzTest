<?php
/**
 * User Seif <ben.s@mipih.fr>
 * Date time: 06/11/2018 18:42
 */

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

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getRate()
    {
        return $this::RATE;
    }
}
