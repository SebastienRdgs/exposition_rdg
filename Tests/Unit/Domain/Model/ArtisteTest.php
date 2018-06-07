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
class ArtisteTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \RDG\ExpositionRdg\Domain\Model\Artiste
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \RDG\ExpositionRdg\Domain\Model\Artiste();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPhotoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPhoto()
        );

    }

    /**
     * @test
     */
    public function setPhotoForFileReferenceSetsPhoto()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPhoto($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'photo',
            $this->subject
        );

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
    public function getBiographieReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBiographie()
        );

    }

    /**
     * @test
     */
    public function setBiographieForStringSetsBiographie()
    {
        $this->subject->setBiographie('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'biographie',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDateNaissanceReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateNaissance()
        );

    }

    /**
     * @test
     */
    public function setDateNaissanceForDateTimeSetsDateNaissance()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateNaissance($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateNaissance',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDateDecesReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateDeces()
        );

    }

    /**
     * @test
     */
    public function setDateDecesForDateTimeSetsDateDeces()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateDeces($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateDeces',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getInfluencesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getInfluences()
        );

    }

    /**
     * @test
     */
    public function setInfluencesForStringSetsInfluences()
    {
        $this->subject->setInfluences('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'influences',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getNationaliteReturnsInitialValueForNationalite()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getNationalite()
        );

    }

    /**
     * @test
     */
    public function setNationaliteForObjectStorageContainingNationaliteSetsNationalite()
    {
        $nationalite = new \RDG\ExpositionRdg\Domain\Model\Nationalite();
        $objectStorageHoldingExactlyOneNationalite = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneNationalite->attach($nationalite);
        $this->subject->setNationalite($objectStorageHoldingExactlyOneNationalite);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneNationalite,
            'nationalite',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addNationaliteToObjectStorageHoldingNationalite()
    {
        $nationalite = new \RDG\ExpositionRdg\Domain\Model\Nationalite();
        $nationaliteObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $nationaliteObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($nationalite));
        $this->inject($this->subject, 'nationalite', $nationaliteObjectStorageMock);

        $this->subject->addNationalite($nationalite);
    }

    /**
     * @test
     */
    public function removeNationaliteFromObjectStorageHoldingNationalite()
    {
        $nationalite = new \RDG\ExpositionRdg\Domain\Model\Nationalite();
        $nationaliteObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $nationaliteObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($nationalite));
        $this->inject($this->subject, 'nationalite', $nationaliteObjectStorageMock);

        $this->subject->removeNationalite($nationalite);

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
