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
 * ArtisteController
 */
class ArtisteController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * artisteRepository
     * 
     * @var \RDG\ExpositionRdg\Domain\Repository\ArtisteRepository
     * @inject
     */
    protected $artisteRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $artistes = $this->artisteRepository->findAll();
        $this->view->assign('artistes', $artistes);
    }

    /**
     * action show
     * 
     * @param \RDG\ExpositionRdg\Domain\Model\Artiste $artiste
     * @return void
     */
    public function showAction(\RDG\ExpositionRdg\Domain\Model\Artiste $artiste)
    {
        $this->view->assign('artiste', $artiste);
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {

    }
}
