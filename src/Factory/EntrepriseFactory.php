<?php
/**
 * User Seif <ben.s@mipih.fr>
 * Date time: 06/11/2018 19:30
 */

class EntrepriseFactory
{
    const ENTREPRISE_TYPE_AUTOS = 1;
    const ENTREPRISE_TYPE_SAS   = 2;

    const IMPOST_RATES = [
        self::ENTREPRISE_TYPE_AUTOS => 25,
        self::ENTREPRISE_TYPE_SAS   => 33,
    ]

    public static function create($type)
    {
        switch ($type) {
            case self::ENTREPRISE_TYPE_AUTOS:
                return new \Entity\Autos();
            case self::ENTREPRISE_TYPE_SAS:
                return new \Entity\Sas();
        }

        throw new \Exception\EntrepriseTypeNotFound("Le type de l'entreprise fourni est inconnu");
    }
}