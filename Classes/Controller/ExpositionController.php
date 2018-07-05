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
 * ExpositionController
 */
class ExpositionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * expositionRepository
     * 
     * @var \RDG\ExpositionRdg\Domain\Repository\ExpositionRepository
     * @inject
     */
    protected $expositionRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $expositions = $this->expositionRepository->findLatest();
        $this->view->assign('expositions', $expositions);
    }

    /**
     * action show
     * 
     * @param \RDG\ExpositionRdg\Domain\Model\Exposition $exposition
     * @return void
     */
    public function showAction(\RDG\ExpositionRdg\Domain\Model\Exposition $exposition)
    {
        $this->view->assign('exposition', $exposition);
    }
}
