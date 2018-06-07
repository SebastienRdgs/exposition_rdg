<?php
namespace RDG\ExpositionRdg\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Erwan <trus.contact@gmail.com>
 * @author Maelle <maelle.richard.tci@gmail.com>
 * @author Alice <alice.depinoy@gmail.com>
 * @author Sebastien <sebastienb.rodrigues@gmail.com>
 */
class NationaliteTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \RDG\ExpositionRdg\Domain\Model\Nationalite
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RDG\ExpositionRdg\Domain\Model\Nationalite();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNomReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNom()
        );

    }

    /**
     * @test
     */
    public function setNomForStringSetsNom()
    {
        $this->subject->setNom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nom',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCodeisoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCodeiso()
        );

    }

    /**
     * @test
     */
    public function setCodeisoForStringSetsCodeiso()
    {
        $this->subject->setCodeiso('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'codeiso',
            $this->subject
        );

    }
}
