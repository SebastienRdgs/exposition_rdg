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
class LieuTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \RDG\ExpositionRdg\Domain\Model\Lieu
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RDG\ExpositionRdg\Domain\Model\Lieu();
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
    public function getLatitudeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLatitude()
        );

    }

    /**
     * @test
     */
    public function setLatitudeForStringSetsLatitude()
    {
        $this->subject->setLatitude('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'latitude',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLongitudeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLongitude()
        );

    }

    /**
     * @test
     */
    public function setLongitudeForStringSetsLongitude()
    {
        $this->subject->setLongitude('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'longitude',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAdresseReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAdresse()
        );

    }

    /**
     * @test
     */
    public function setAdresseForStringSetsAdresse()
    {
        $this->subject->setAdresse('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'adresse',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCodePostalReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCodePostal()
        );

    }

    /**
     * @test
     */
    public function setCodePostalForStringSetsCodePostal()
    {
        $this->subject->setCodePostal('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'codePostal',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );

    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAccessiblepmrReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAccessiblepmr()
        );

    }

    /**
     * @test
     */
    public function setAccessiblepmrForBoolSetsAccessiblepmr()
    {
        $this->subject->setAccessiblepmr(true);

        self::assertAttributeEquals(
            true,
            'accessiblepmr',
            $this->subject
        );

    }
}
