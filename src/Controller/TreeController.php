<?php

namespace App\Controller;

use App\Entity\OpenspecS;
use App\Entity\OpenspecTree;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/api/openspec/tree")
 */
class TreeController extends AbstractController
{
  /**
   * @Route("/", name="start")
   */
  public function index()
  {
    return $this->render('start/index.html.twig', [
      'controller_name' => 'Security Layer must be Implemented!!!',
    ]);
  }

  /**
   * @Route("/{parentId}", name="api_openspec_parent_tree", methods="GET|POST")
   */
  public function getParentTree($parentId)
  {
    $data = [];
    $parentObject = $this->getDoctrine()
      ->getRepository(OpenspecS::class)
      ->find($parentId);

    $childrenObjects = $this->getDoctrine()
      ->getRepository(OpenspecTree::class)
      ->findBy(array('parent' => $parentId));

    if (!empty($treeResult) || (!empty($parentObject))){
      $data = $this->formatTreeData([
        "parent" => $parentObject,
        "childs" => $childrenObjects,
      ]);
    }
    $response = new Response();
    $response->setContent(json_encode($data));
    $response->headers->set('Content-Type', 'application/json');
    return $response;
  }

  private function formatTreeData($data){
    $formattedData = [];
    $formattedData = [
      "title"   => $data["parent"]->getName(),
      "key"     => $data["parent"]->getId(),
      "folder"  => true,
    ];
    foreach ($data["childs"] as $child){
      $formattedData["children"][] = [
        "title" => $child->geteChild()->getName(),
        "key" => $child->geteChild()->getId(),
      ];
    }
    return $formattedData;
  }
}
