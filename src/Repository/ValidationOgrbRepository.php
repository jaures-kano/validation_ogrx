<?php

namespace App\Repository;

use App\Entity\ValidationOgrb;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ValidationOgrb|null find($id, $lockMode = null, $lockVersion = null)
 * @method ValidationOgrb|null findOneBy(array $criteria, array $orderBy = null)
 * @method ValidationOgrb[]    findAll()
 * @method ValidationOgrb[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ValidationOgrbRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValidationOgrb::class);
    }

    // /**
    //  * @return ValidationOgrb[] Returns an array of ValidationOgrb objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ValidationOgrb
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
