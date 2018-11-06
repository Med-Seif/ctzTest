<?php
/**
 * User Seif <ben.s@mipih.fr>
 * Date time: 06/11/2018 19:08
 */

requrie_once __DIR__.'/../autoload.php';
$ca = 100000;
$type = EntrepriseFactory::ENTREPRISE_TYPE_SAS;

$serviceImpCalc = new \Service\ImpotsCalculator();
$serviceImpCalc->setCa($ca);
$serviceImpCalc->setType($type);

echo $serviceImpCalc->calculate();

