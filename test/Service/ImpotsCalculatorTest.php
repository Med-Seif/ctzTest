<?php

/**
 * Class ImpotsCalculatorTest
 *
 * @author Seif
 */
class ImpotsCalculatorTest extends PHPUnit\Framework\TestCase
{
    protected $impotsCalculator;

    public function setUp()
    {
        $ca = 100000.0;
        $type = \Factory\EntrepriseFactory::ENTREPRISE_TYPE_SAS;
        $entreprise = \Factory\EntrepriseFactory::create($type);
        $serviceImpCalc = new \Service\ImpotsCalculator();
        $serviceImpCalc->setCa($ca);
        $serviceImpCalc->setEntreprise($entreprise);
        $this->impotsCalculator = $serviceImpCalc;
    }

    public function testCalculate()
    {
        $impot = $this->impotsCalculator->calculate();
        $this->assertNotNull($impot);
        $this->assertInternalType('float', $impot);
        $this->assertGreaterThanOrEqual(0, $impot);
    }

}
