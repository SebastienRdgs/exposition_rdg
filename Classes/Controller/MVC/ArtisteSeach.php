<?php
namespace RDG\ExpositionRdg\Controller\MVC;
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
 * ArtisteSearch
 */
class ArtisteSearch
{
 /**
     * Le nom
     * 
     * @var string
     */
    protected $keyword = null;

    public function __construct() {}

	public function getKeyword(){
		return $this->keyword;
	}

	public function setKeyword($keyword){
		$this->keyword = $keyword;
	}
}