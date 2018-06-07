<?php
namespace RDG\ExpositionRdg\Domain\Model;

/***
 *
 * This file is part of the "exposition rdg" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Erwan <trus.contact@gmail.com>, LaTeam
 *           Maelle <maelle.richard.tci@gmail.com>, LaTeam
 *           Alice <alice.depinoy@gmail.com>, LaTeam
 *           Sebastien <sebastienb.rodrigues@gmail.com>, LaTeam
 *
 ***/

/**
 * Exposition
 */
class Exposition extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Le nom
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';

    /**
     * L'horaire
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $horaire = '';

    /**
     * La description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * Le visuel
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $visuel = null;

    /**
     * Le tarif
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $tarifs = '';

    /**
     * La date de début
     * 
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $datedeb = null;

    /**
     * La date de fin
     * 
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $datefin = null;

    /**
     * Une exposition a un lieu, un lieu peut avoir plusieurs expositions
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RDG\ExpositionRdg\Domain\Model\Lieu>
     * @cascade remove
     */
    protected $lieu = null;

    /**
     * des oeuvres peut etre dans plusieurs expositions
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RDG\ExpositionRdg\Domain\Model\Oeuvres>
     * @lazy
     */
    protected $oeuvres = null;

    /**
     * Returns the nom
     * 
     * @return string $nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the nom
     * 
     * @param string $nom
     * @return void
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Returns the horaire
     * 
     * @return string $horaire
     */
    public function getHoraire()
    {
        return $this->horaire;
    }

    /**
     * Sets the horaire
     * 
     * @param string $horaire
     * @return void
     */
    public function setHoraire($horaire)
    {
        $this->horaire = $horaire;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the visuel
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $visuel
     */
    public function getVisuel()
    {
        return $this->visuel;
    }

    /**
     * Sets the visuel
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $visuel
     * @return void
     */
    public function setVisuel(\TYPO3\CMS\Extbase\Domain\Model\FileReference $visuel)
    {
        $this->visuel = $visuel;
    }

    /**
     * Returns the tarifs
     * 
     * @return string $tarifs
     */
    public function getTarifs()
    {
        return $this->tarifs;
    }

    /**
     * Sets the tarifs
     * 
     * @param string $tarifs
     * @return void
     */
    public function setTarifs($tarifs)
    {
        $this->tarifs = $tarifs;
    }

    /**
     * Returns the datedeb
     * 
     * @return \DateTime $datedeb
     */
    public function getDatedeb()
    {
        return $this->datedeb;
    }

    /**
     * Sets the datedeb
     * 
     * @param \DateTime $datedeb
     * @return void
     */
    public function setDatedeb(\DateTime $datedeb)
    {
        $this->datedeb = $datedeb;
    }

    /**
     * Returns the datefin
     * 
     * @return \DateTime $datefin
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Sets the datefin
     * 
     * @param \DateTime $datefin
     * @return void
     */
    public function setDatefin(\DateTime $datefin)
    {
        $this->datefin = $datefin;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->lieu = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->oeuvres = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Lieu
     * 
     * @param \RDG\ExpositionRdg\Domain\Model\Lieu $lieu
     * @return void
     */
    public function addLieu(\RDG\ExpositionRdg\Domain\Model\Lieu $lieu)
    {
        $this->lieu->attach($lieu);
    }

    /**
     * Removes a Lieu
     * 
     * @param \RDG\ExpositionRdg\Domain\Model\Lieu $lieuToRemove The Lieu to be removed
     * @return void
     */
    public function removeLieu(\RDG\ExpositionRdg\Domain\Model\Lieu $lieuToRemove)
    {
        $this->lieu->detach($lieuToRemove);
    }

    /**
     * Returns the lieu
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RDG\ExpositionRdg\Domain\Model\Lieu> $lieu
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Sets the lieu
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RDG\ExpositionRdg\Domain\Model\Lieu> $lieu
     * @return void
     */
    public function setLieu(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * Adds a Oeuvres
     * 
     * @param \RDG\ExpositionRdg\Domain\Model\Oeuvres $oeuvre
     * @return void
     */
    public function addOeuvre(\RDG\ExpositionRdg\Domain\Model\Oeuvres $oeuvre)
    {
        $this->oeuvres->attach($oeuvre);
    }

    /**
     * Removes a Oeuvres
     * 
     * @param \RDG\ExpositionRdg\Domain\Model\Oeuvres $oeuvreToRemove The Oeuvres to be removed
     * @return void
     */
    public function removeOeuvre(\RDG\ExpositionRdg\Domain\Model\Oeuvres $oeuvreToRemove)
    {
        $this->oeuvres->detach($oeuvreToRemove);
    }

    /**
     * Returns the oeuvres
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RDG\ExpositionRdg\Domain\Model\Oeuvres> $oeuvres
     */
    public function getOeuvres()
    {
        return $this->oeuvres;
    }

    /**
     * Sets the oeuvres
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\RDG\ExpositionRdg\Domain\Model\Oeuvres> $oeuvres
     * @return void
     */
    public function setOeuvres(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $oeuvres)
    {
        $this->oeuvres = $oeuvres;
    }
}
