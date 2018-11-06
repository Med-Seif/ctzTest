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
abstract class Entreprise
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

}