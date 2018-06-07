<?php
namespace RDG\ExpositionRdg\Controller;

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
 * OeuvresController
 */
class OeuvresController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $oeuvres = $this->oeuvresRepository->findAll();
        $this->view->assign('oeuvres', $oeuvres);
    }

    /**
     * action show
     * 
     * @param \RDG\ExpositionRdg\Domain\Model\Oeuvres $oeuvres
     * @return void
     */
    public function showAction(\RDG\ExpositionRdg\Domain\Model\Oeuvres $oeuvres)
    {
        $this->view->assign('oeuvres', $oeuvres);
    }

    /**
     * action highlight
     * 
     * @return void
     */
    public function highlightAction()
    {

    }
}
