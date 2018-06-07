<?php
namespace RDG\ExpositionRdg\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Erwan <trus.contact@gmail.com>
 * @author Maelle <maelle.richard.tci@gmail.com>
 * @author Alice <alice.depinoy@gmail.com>
 * @author Sebastien <sebastienb.rodrigues@gmail.com>
 */
class ExpositionControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \RDG\ExpositionRdg\Controller\ExpositionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RDG\ExpositionRdg\Controller\ExpositionController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllExpositionsFromRepositoryAndAssignsThemToView()
    {

        $allExpositions = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $expositionRepository = $this->getMockBuilder(\RDG\ExpositionRdg\Domain\Repository\ExpositionRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $expositionRepository->expects(self::once())->method('findAll')->will(self::returnValue($allExpositions));
        $this->inject($this->subject, 'expositionRepository', $expositionRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('expositions', $allExpositions);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenExpositionToView()
    {
        $exposition = new \RDG\ExpositionRdg\Domain\Model\Exposition();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('exposition', $exposition);

        $this->subject->showAction($exposition);
    }
}
