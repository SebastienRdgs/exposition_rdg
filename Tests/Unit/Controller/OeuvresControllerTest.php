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
class OeuvresControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \RDG\ExpositionRdg\Controller\OeuvresController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\RDG\ExpositionRdg\Controller\OeuvresController::class)
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
    public function listActionFetchesAllOeuvressFromRepositoryAndAssignsThemToView()
    {

        $allOeuvress = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $oeuvresRepository = $this->getMockBuilder(\RDG\ExpositionRdg\Domain\Repository\OeuvresRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $oeuvresRepository->expects(self::once())->method('findAll')->will(self::returnValue($allOeuvress));
        $this->inject($this->subject, 'oeuvresRepository', $oeuvresRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('oeuvress', $allOeuvress);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenOeuvresToView()
    {
        $oeuvres = new \RDG\ExpositionRdg\Domain\Model\Oeuvres();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('oeuvres', $oeuvres);

        $this->subject->showAction($oeuvres);
    }
}
