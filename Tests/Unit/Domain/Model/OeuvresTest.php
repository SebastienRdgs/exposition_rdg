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
class OeuvresTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \RDG\ExpositionRdg\Domain\Model\Oeuvres
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RDG\ExpositionRdg\Domain\Model\Oeuvres();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIntituleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIntitule()
        );

    }

    /**
     * @test
     */
    public function setIntituleForStringSetsIntitule()
    {
        $this->subject->setIntitule('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'intitule',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );

    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
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
    public function getTypeReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setTypeForIntSetsType()
    {
    }

    /**
     * @test
     */
    public function getDimensionsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDimensions()
        );

    }

    /**
     * @test
     */
    public function setDimensionsForStringSetsDimensions()
    {
        $this->subject->setDimensions('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dimensions',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );

    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );

    }
}
