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

    public function lockLignes($dep, $iIdUser) {

        $entityManager = $this->getEntityManager();

        $RAW_QUERY = "UPDATE public.validation_ogra SET iduser=:iduser  WHERE dep2=:dep AND ss_agent IS NOT TRUE";
        $statement = $entityManager->getConnection()->prepare($RAW_QUERY);

        $statement->bindParam(':iduser', $iIdUser);
        $statement->bindParam(':dep', $dep);
        $statement->execute();
    }


    public function getHistoTraitementDep($dep)
    {
        $entityManager = $this->getEntityManager();

        $RAW_QUERY = "SELECT v.id as vid ,* FROM public.validation_ogra v , public.user u
        WHERE (traite = TRUE OR rappel IS TRUE )
        AND ss_agent IS NOT TRUE
        AND u.id = v.iduser
        AND dep2=:dep         
        ORDER BY vid";

        $statement = $entityManager->getConnection()->prepare($RAW_QUERY);

        $statement->bindParam(':dep', $dep);
        $statement->execute();

        return $statement->fetchAllAssociative();
    }



    public function getHistoTraitementRes($dep)
    {
        $entityManager = $this->getEntityManager();

        $RAW_QUERY = "SELECT v.id as vid ,* FROM public.validation_ogra v , public.user u
        WHERE (traite = TRUE OR rappel IS TRUE)
        AND ss_agent IS TRUE
        AND u.id = v.iduser
        AND res1=:dep          
        ORDER BY vid  ";

        $statement = $entityManager->getConnection()->prepare($RAW_QUERY);

        $statement->bindParam(':dep', $dep);
        $statement->execute();

        return $statement->fetchAllAssociative();
    }

}
