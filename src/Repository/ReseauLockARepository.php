<?php

namespace App\Repository;

use App\Entity\ReseauLockA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReseauLockA|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReseauLockA|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReseauLockA[]    findAll()
 * @method ReseauLockA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReseauLockARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReseauLockA::class);
    }

    // /**
    //  * @return ReseauLockA[] Returns an array of ReseauLockA objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReseauLockA
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
