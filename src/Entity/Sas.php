<?php
/**
 * User Seif <ben.s@mipih.fr>
 * Date time: 06/11/2018 18:42
 */

namespace Entity;

/**
 * Class Sas
 *
 * @author Seif
 */
class Sas extends Entreprise
{
    /**
     * @var string
     */
    protected $adresse;

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

}

