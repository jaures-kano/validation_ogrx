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
class DepRepositoryA extends \Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository
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


    public function getDepAAttributeProgression()
    {
        $entityManager = $this->getEntityManager();

        $RAW_QUERY = "SELECT DISTINCT(dep), (select count(v1.id) FROM public.validation_ogra v1 where traite is true 
            AND v.dep=v1.dep AND v.iduser=v1.iduser) as traites, 
            (select count(v2.id) FROM public.validation_ogra v2 where traite is false AND v.dep=v2.dep AND v.iduser=v2.iduser) as nontraite ,
            (select count(v3.id) FROM public.validation_ogra v3 where rappel is true AND v.dep=v3.dep AND v.iduser=v3.iduser) as rappel ,u.name, u.firstname
            FROM public.user u, 
            public.validation_ogra v 
            WHERE u.id=v.iduser  AND ss_agent IS FALSE group by dep, v.iduser, traite, nontraite,u.name, u.firstname ORDER BY dep";

        $statement = $entityManager->getConnection()->prepare($RAW_QUERY);

        $statement->execute();

        return $statement->fetchAllAssociative();

    }


    public function getReseauProgression()
    {
        $entityManager = $this->getEntityManager();
        $RAW_QUERY = "SELECT DISTINCT(res1) , 
        (select count(v.id) from public.validation_ogra v where traite is true AND v.res1 = v1.res1 AND v.ss_agent IS  TRUE AND coloriedirect IS NOT TRUE AND extrac !=0) as traites,
        (select count(v4.id) from public.validation_ogra v4 where traite is not true AND v1.res1 = v4.res1 AND v4.ss_agent IS  TRUE AND coloriedirect IS NOT TRUE AND extrac !=0) as atraiter, 
        (select count(v2.id) from public.validation_ogra v2 where  v2.res1 = v1.res1 AND v2.ss_agent IS  TRUE AND extrac !=0) as lignes,
         (select count(v3.id) FROM public.validation_ogra v3 where rappel is true AND v3.res1 = v1.res1 AND v1.iduser=v3.iduser) as rappel ,u.name, u.firstname
        FROM public.validation_ogra v1,
        public.user u 
        WHERE u.id=v1.iduser AND res1 is not null AND ss_agent IS TRUE AND extrac !=0
        group by res1 , traite ,u.name, u.firstname, v1.iduser order by res1";

        $statement = $entityManager->getConnection()->prepare($RAW_QUERY);

        $statement->execute();

        return $statement->fetchAllAssociative();

    }


    public function getListeDepTraites()
    {
        $entityManager = $this->getEntityManager();
        $RAW_QUERY = "select  d.cp, d.dep
        from public.dep d , public.validation_ogra v  
        WHERE d.cp = v.dep2 AND ss_agent IS NOT TRUE
        AND v.traite IS TRUE
        group by d.cp, d.dep
        order by d.cp";

        $statement = $entityManager->getConnection()->prepare($RAW_QUERY);

        $statement->execute();

        return $statement->fetchAllAssociative();
    }


    public function getListeReseauTraites()
    {
        $entityManager = $this->getEntityManager();
        $RAW_QUERY = "select  l.reseau as res, v.res1 as reseau
        from  public.reseau_lock_a l , public.validation_ogra v 
        WHERE  v.traite IS TRUE
        AND ss_agent IS TRUE
        AND v.res1 LIKE '%' || l.reseau || '%'
        group by l.reseau, v.res1
        order by l.reseau";

        $statement = $entityManager->getConnection()->prepare($RAW_QUERY);

        $statement->execute();

        return $statement->fetchAllAssociative();
    }
}