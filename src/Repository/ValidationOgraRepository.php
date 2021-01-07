<?php

namespace App\Repository;

use App\Entity\ValidationOgra;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ValidationOgra|null find($id, $lockMode = null, $lockVersion = null)
 * @method ValidationOgra|null findOneBy(array $criteria, array $orderBy = null)
 * @method ValidationOgra[]    findAll()
 * @method ValidationOgra[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ValidationOgraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValidationOgra::class);
    }

    // /**
    //  * @return ValidationOgra[] Returns an array of ValidationOgra objects
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
    public function findOneBySomeField($value): ?ValidationOgra
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
