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
        $this->impotsCalculator = new \Service\ImpotsCalculator();

    }

    public function testCalculate()
    {
        $ca = 100000.0;
        $this->impotsCalculator->setCa($ca);

        $type = \Factory\EntrepriseFactory::ENTREPRISE_TYPE_SAS;
        $entreprise = \Factory\EntrepriseFactory::create($type);
        $this->impotsCalculator->setEntreprise($entreprise);

        $impot = $this->impotsCalculator->calculate();

        $this->assertNotNull($impot);
        $this->assertInternalType('float', $impot);
        $this->assertGreaterThanOrEqual(0, $impot);

        $type = \Factory\EntrepriseFactory::ENTREPRISE_TYPE_AUTOS;
        $entreprise = \Factory\EntrepriseFactory::create($type);
        $this->impotsCalculator->setEntreprise($entreprise);

        $impot = $this->impotsCalculator->calculate();

        $this->assertNotNull($impot);
        $this->assertInternalType('float', $impot);
        $this->assertGreaterThanOrEqual(0, $impot);
    }


}
