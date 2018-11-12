<?php

namespace Entity;

/**
 * Class Sas
 *
 * @author Seif
 */
class Sas extends AbstractEntreprise
{
    /**
     * Pourcentage impôts
     *
     * @var float
     */
    const RATE = 33;
    /**
     * @var
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

