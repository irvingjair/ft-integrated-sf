<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\Entity\OpenspecS;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
  /**
   * @Route("/", name="index")
   */
  public function index()
  {
    $selectOptions = [];
    $message = "";
    $selectOptions = $this->getDoctrine()
      ->getRepository(OpenspecS::class)
      ->findAll();
    if (empty($selectOptions)){
      $message = "No Results";
    }
    return $this->render('test/test.html.twig', [
      'controller_name' => 'DefaultController',
      'options' => $selectOptions,
      'message' => $message,
    ]);
  }
}