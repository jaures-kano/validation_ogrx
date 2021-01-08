<?php

namespace App\Repository;

use App\Entity\DepLockA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DepLockA|null find($id, $lockMode = null, $lockVersion = null)
 * @method DepLockA|null findOneBy(array $criteria, array $orderBy = null)
 * @method DepLockA[]    findAll()
 * @method DepLockA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepLockARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DepLockA::class);
    }

    // /**
    //  * @return DepLockA[] Returns an array of DepLockA objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DepLockA
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */




    public function emptyUserDepLock(string $dep)
    {
        $this->createQueryBuilder('r')
            ->update(DepLockA::class, 'r')
            ->set('r.iduser', ':iduser')
            ->where('r.dep =:dep')
            ->setParameter('iduser', 'NULL')
            ->setParameter('dep', $dep)
            ->getQuery()
            ->execute();


    }



    public function attributeDepToUser($iduser, $dep)
    {
        $entityManager = $this->getEntityManager();

        $RAW_QUERY = "UPDATE public.dep_lock_a SET lock=:lock , iduser_id=:iduser  WHERE dep=:dep";

        $statement = $entityManager->getConnection()->prepare($RAW_QUERY);
        $statement->bindParam('iduser', $iduser);
        $statement->bindValue('lock', 'TRUE');
        $statement->bindParam('dep', $dep);


        $statement->execute();

    }
}
