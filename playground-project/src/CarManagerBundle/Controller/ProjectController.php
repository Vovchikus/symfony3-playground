<?php

namespace CarManagerBundle\Controller;

use CarManagerBundle\Document\Project;
use CarManagerBundle\Form\Type\ProjectType;
use Doctrine\ODM\MongoDB\DocumentManager;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\SecurityBundle\Tests\Functional\Bundle\AclBundle\Entity\Car;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\View;


/**
 * Class ProjectController
 * @package CarManagerBundle\Controller
 */
class ProjectController extends FOSRestController
{

  /**
   * @param Request $request
   * @View()
   * @return array
   */
  public function postProjectAction(Request $request)
  {
    $project = new Project();

    $car = new Car();

    $project->setCars($car);

    $form = $this->createForm(new ProjectType(), $project);
    $form->handleRequest($request);

    /** @var DocumentManager $dm */
    $dm = $this->get('doctrine_mongodb')->getManager();
    $dm->persist($car);
    $dm->flush();

    return $this->view($car, 201);

  }

}