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
 * The repository for Expositions
 */
class ExpositionRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function findLatest()
    {
        $query = $this->createQuery();

        $query->setOrderings(
            [
                'datedeb' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
            ]
        );

        $query->matching(
            $query->greaterThanOrEqual(
                'datefin',
                (new \DateTime())->setTime(0,0,0) 
            ) 
        );
        return $query->execute();
    }
}
