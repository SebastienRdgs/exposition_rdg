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
 * Nationalite
 */
class Nationalite extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Le nom
     * 
     * @var string
     */
    protected $nom = '';

    /**
     * codeiso
     * 
     * @var string
     */
    protected $codeiso = '';

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
     * Returns the codeiso
     * 
     * @return string $codeiso
     */
    public function getCodeiso()
    {
        return $this->codeiso;
    }

    /**
     * Sets the codeiso
     * 
     * @param string $codeiso
     * @return void
     */
    public function setCodeiso($codeiso)
    {
        $this->codeiso = $codeiso;
    }
}
