<?php
namespace RDG\ExpositionRdg\Domain\Repository;

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
 * The repository for Artistes
 */
class ArtisteRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
	/**
	 * Gets events following by request
	 *
	 *
	 * @param string $request
	 * @return object
	 */

	public function findByNom($request = NULL){
	    $query = $this->createQuery();
	    if($request) {
	        $result =  $query->matching($query->like('nom', '%'.$request.'%'))->execute();
	    }
	    return $result;
	}
    }
