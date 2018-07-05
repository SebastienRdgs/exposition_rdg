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
 * The repository for Oeuvres
 */
class OeuvresRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
  public function findAll() {
    return $this->createQuery()->execute();
  }
  public function findHighlight() {
    $query = $this->createQuery();
    $query->setOrderings(
        [
            'date' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING,
        ]
    );
    $query->setLimit(3);
    return $query->execute();
  }
}
