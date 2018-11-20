<?php

namespace Factory;

use Service\AppMessages;

/**
 * Class EntrepriseFactory
 *
 * @package Factory
 * @author  Seif
 */
class EntrepriseFactory
{
    /**
     * @var string
     */
    const ENTREPRISE_TYPE_AUTOS = 'autos';
    /**
     * @var string
     */
    const ENTREPRISE_TYPE_SAS = 'sas';

    /**
     * Classe factory qui va se charger de nous instancier l'entreprise adéquate
     *
     * @param string $type
     *
     * @return \Entity\Autos|\Entity\Sas
     * @throws \Exception\EntrepriseTypeNotFound
     */
    public static function create($type)
    {
        switch ($type) {
            case self::ENTREPRISE_TYPE_AUTOS:
                return new \Entity\Autos();
            case self::ENTREPRISE_TYPE_SAS:
                return new \Entity\Sas();
        }

        throw new \Exception\EntrepriseTypeNotFound(AppMessages::EXC_ENTREPRISE_TYPE_UNDEFINED);
    }
}