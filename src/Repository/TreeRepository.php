<?php

namespace App\Repository;

use App\Entity\OpenspecTree;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OpenspecTree|null find($id, $lockMode = null, $lockVersion = null)
 * @method OpenspecTree|null findOneBy(array $criteria, array $orderBy = null)
 * @method OpenspecTree[]    findAll()
 * @method OpenspecTree[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TreeRepository extends ServiceEntityRepository
{
  public function __construct(RegistryInterface $registry)
  {
    parent::__construct($registry, OpenspecTree::class);
  }

  public function findAllChilds($parentId)
  {
    $qb = $this->getEntityManager()->createQueryBuilder()
      ->orderBy('Name', 'ASC')
      ->getQuery();

    return $qb->getResult();
  }

}
