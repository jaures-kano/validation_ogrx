<?php


namespace App\Repository;


use App\Entity\Dep;
use App\Entity\DepLockA;
use App\Entity\ValidationOgra;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dep|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dep|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dep[]    findAll()
 * @method Dep[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepRepository extends \Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry )
    {
        parent::__construct($registry, Dep::class);
    }

    public function getDepAToAttribute()
    {
        return $this->createQueryBuilder('d')
            ->select('d.cp, d.dep')
            //->from(Dep::class, 'd')
            ->from(DepLockA::class , 'l')
            ->from(ValidationOgra::class,'v')
            ->where('d.cp = l.dep')
            ->andWhere('l.lock = FALSE')
            ->andWhere('v.dep2 = d.cp')
            ->groupBy('d.cp, d.dep')
            ->orderBy('d.cp')
            ->getQuery()
            ->getArrayResult();
    }


    public function getDepAAttributeToUser(int $iduser)
    {
        $entityManager = $this->getEntityManager();

        $RAW_QUERY = "SELECT DISTINCT(dep), (select count(v1.id) FROM public.validation_ogra v1 where traite is true 
            AND v.dep=v1.dep AND v.iduser=v1.iduser) as traites, 
            (select count(v2.id) FROM public.validation_ogra v2 where traite is false AND v.dep=v2.dep AND v.iduser=v2.iduser) as nontraite ,
            (select count(v3.id) FROM public.validation_ogra v3 where rappel is true AND v.dep=v3.dep AND v.iduser=v3.iduser) as rappel 
            FROM public.user u, 
            public.validation_ogra v 
            WHERE u.id=v.iduser AND u.id=:id AND ss_agent IS FALSE group by dep, v.iduser, traite, nontraite ORDER BY dep";

        $statement = $entityManager->getConnection()->prepare($RAW_QUERY);
        $statement->bindParam('id', $iduser);


        $statement->execute();

        return $statement->fetchAllAssociative();

    }
}