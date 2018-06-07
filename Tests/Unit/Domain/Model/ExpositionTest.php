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
class ExpositionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \RDG\ExpositionRdg\Domain\Model\Exposition
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RDG\ExpositionRdg\Domain\Model\Exposition();
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
    public function getHoraireReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHoraire()
        );

    }

    /**
     * @test
     */
    public function setHoraireForStringSetsHoraire()
    {
        $this->subject->setHoraire('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'horaire',
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
    public function getVisuelReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getVisuel()
        );

    }

    /**
     * @test
     */
    public function setVisuelForFileReferenceSetsVisuel()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setVisuel($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'visuel',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTarifsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTarifs()
        );

    }

    /**
     * @test
     */
    public function setTarifsForStringSetsTarifs()
    {
        $this->subject->setTarifs('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tarifs',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatedebReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDatedeb()
        );

    }

    /**
     * @test
     */
    public function setDatedebForDateTimeSetsDatedeb()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDatedeb($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'datedeb',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDatefinReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDatefin()
        );

    }

    /**
     * @test
     */
    public function setDatefinForDateTimeSetsDatefin()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDatefin($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'datefin',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLieuReturnsInitialValueForLieu()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLieu()
        );

    }

    /**
     * @test
     */
    public function setLieuForObjectStorageContainingLieuSetsLieu()
    {
        $lieu = new \RDG\ExpositionRdg\Domain\Model\Lieu();
        $objectStorageHoldingExactlyOneLieu = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLieu->attach($lieu);
        $this->subject->setLieu($objectStorageHoldingExactlyOneLieu);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneLieu,
            'lieu',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addLieuToObjectStorageHoldingLieu()
    {
        $lieu = new \RDG\ExpositionRdg\Domain\Model\Lieu();
        $lieuObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lieuObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($lieu));
        $this->inject($this->subject, 'lieu', $lieuObjectStorageMock);

        $this->subject->addLieu($lieu);
    }

    /**
     * @test
     */
    public function removeLieuFromObjectStorageHoldingLieu()
    {
        $lieu = new \RDG\ExpositionRdg\Domain\Model\Lieu();
        $lieuObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lieuObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($lieu));
        $this->inject($this->subject, 'lieu', $lieuObjectStorageMock);

        $this->subject->removeLieu($lieu);

    }

    /**
     * @test
     */
    public function getOeuvresReturnsInitialValueForOeuvres()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOeuvres()
        );

    }

    /**
     * @test
     */
    public function setOeuvresForObjectStorageContainingOeuvresSetsOeuvres()
    {
        $oeuvre = new \RDG\ExpositionRdg\Domain\Model\Oeuvres();
        $objectStorageHoldingExactlyOneOeuvres = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOeuvres->attach($oeuvre);
        $this->subject->setOeuvres($objectStorageHoldingExactlyOneOeuvres);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOeuvres,
            'oeuvres',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addOeuvreToObjectStorageHoldingOeuvres()
    {
        $oeuvre = new \RDG\ExpositionRdg\Domain\Model\Oeuvres();
        $oeuvresObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oeuvresObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($oeuvre));
        $this->inject($this->subject, 'oeuvres', $oeuvresObjectStorageMock);

        $this->subject->addOeuvre($oeuvre);
    }

    /**
     * @test
     */
    public function removeOeuvreFromObjectStorageHoldingOeuvres()
    {
        $oeuvre = new \RDG\ExpositionRdg\Domain\Model\Oeuvres();
        $oeuvresObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $oeuvresObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($oeuvre));
        $this->inject($this->subject, 'oeuvres', $oeuvresObjectStorageMock);

        $this->subject->removeOeuvre($oeuvre);

    }
}
