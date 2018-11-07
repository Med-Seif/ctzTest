<?php
/**
 * User Seif <ben.s@mipih.fr>
 * Date time: 06/11/2018 19:08
 */

require_once __DIR__.'/../autoload.php';
$ca = 100000;
$type = \Factory\EntrepriseFactory::ENTREPRISE_TYPE_SAS;
$entreprise = \Factory\EntrepriseFactory::create($type);

$serviceImpCalc = new \Service\ImpotsCalculator();
$serviceImpCalc->setCa($ca);
$serviceImpCalc->setEntreprise($entreprise);

echo $serviceImpCalc->calculate();

