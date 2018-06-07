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
 * Lieu
 */
class Lieu extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Le nom
     * 
     * @var string
     */
    protected $nom = '';

    /**
     * La latitude
     * 
     * @var string
     */
    protected $latitude = '';

    /**
     * La longitude
     * 
     * @var string
     */
    protected $longitude = '';

    /**
     * L'adresse
     * 
     * @var string
     */
    protected $adresse = '';

    /**
     * Le code postal
     * 
     * @var string
     */
    protected $codePostal = '';

    /**
     * La description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * L'accessibilité au personne a mobilité réduite
     * 
     * @var bool
     */
    protected $accessiblepmr = false;

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
     * Returns the latitude
     * 
     * @return string $latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets the latitude
     * 
     * @param string $latitude
     * @return void
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * Returns the longitude
     * 
     * @return string $longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets the longitude
     * 
     * @param string $longitude
     * @return void
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * Returns the adresse
     * 
     * @return string $adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Sets the adresse
     * 
     * @param string $adresse
     * @return void
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * Returns the codePostal
     * 
     * @return string $codePostal
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Sets the codePostal
     * 
     * @param string $codePostal
     * @return void
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
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
     * Returns the accessiblepmr
     * 
     * @return bool $accessiblepmr
     */
    public function getAccessiblepmr()
    {
        return $this->accessiblepmr;
    }

    /**
     * Sets the accessiblepmr
     * 
     * @param bool $accessiblepmr
     * @return void
     */
    public function setAccessiblepmr($accessiblepmr)
    {
        $this->accessiblepmr = $accessiblepmr;
    }

    /**
     * Returns the boolean state of accessiblepmr
     * 
     * @return bool
     */
    public function isAccessiblepmr()
    {
        return $this->accessiblepmr;
    }
}
