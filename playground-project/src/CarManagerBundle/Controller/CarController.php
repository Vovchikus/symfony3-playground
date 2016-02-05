<?php

namespace CarManagerBundle\Controller;

use CarManagerBundle\Document\Car;
use CarManagerBundle\Form\Type\CarType;
use Doctrine\ODM\MongoDB\DocumentManager;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ApiV1Controller
 * @package CarManagerBundle\Controller
 */
class CarController extends FOSRestController
{

  /**
   * @View()
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function getCarsAction()
  {
    $carRepository = $this->get('doctrine_mongodb')
      ->getManager()
      ->getRepository(Car::class);
    $cars = $carRepository->findAll();
    $view = $this->view($cars, 200);
    return $this->handleView($view);
  }

  /**
   * @param $id
   * @return Response
   */
  public function getCarAction($id)
  {
    $carRepository = $this->get('doctrine_mongodb')
      ->getManager()
      ->getRepository(Car::class);
    $car = $carRepository->find($id);
    $view = $this->view($car, 200);
    return $this->handleView($view);
  }

  /**
   * @param Request $request
   * @View()
   * @return array
   */
  public function postCarAction(Request $request)
  {
    $car = new Car();
    $form = $this->createForm(new CarType(), $car);
    $form->handleRequest($request);

    /** @var DocumentManager $dm */
    $dm = $this->get('doctrine_mongodb')->getManager();
    $dm->persist($car);
    $dm->flush();

    return $this->view($car, 201);

  }


}