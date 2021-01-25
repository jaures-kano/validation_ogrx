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



    public function getListeATraiter($idUser)
    {
        $RAW_QUERY = "SELECT * FROM  public.validation_ogra "
            . "WHERE iduser =:id_user AND traite IS false AND rappel IS NOT TRUE "
            . "AND coloriedirect IS NOT TRUE AND extrac !=0 ORDER BY id";

        $entityManager = $this->getEntityManager();
        $statement = $entityManager->getConnection()->prepare($RAW_QUERY);

        $statement->bindParam(':dep', $dep);
        $statement->execute();

        return $statement->fetchAllAssociative();
    }

    public function getNextLine($idUser)
    {
        $query = "SELECT * FROM  public.validation_ogra "
            . "WHERE iduser =:id_user AND traite IS false AND rappel IS NOT TRUE "
            . "AND coloriedirect IS NOT TRUE AND extrac !=0 ORDER BY id";


        $entityManager = $this->getEntityManager();
        $statement = $entityManager->getConnection()->prepare($query);

        $statement->bindParam(':id_user', $idUser);
        $statement->execute();

        return $statement->fetchAllAssociative();
    }

    public function getLinesByCodens(string $codens)
    {
        $query = "SELECT * FROM public.validation_ogra 
        WHERE codens =:codens  order by extrac desc ";

        $entityManager = $this->getEntityManager();
        $statement = $entityManager->getConnection()->prepare($query);

        $statement->bindParam(':codens', $codens);
        $statement->execute();

        return $statement->fetchAllAssociative();
    }


    public function lockLignesByCodens(string $codens, int $iIdUser) {


        $query = "UPDATE public.validation_ogra SET lock=:lock, iduser=:iduser WHERE codens=:codens";

        $entityManager = $this->getEntityManager();
        $statement = $entityManager->getConnection()->prepare($query);
        $statement->bindValue(':lock', 'TRUE');
        $statement->bindParam(':iduser',$iIdUser );
        $statement->bindParam(':codens', $codens);
        $statement->execute();
    }


    public function lockLignesById(int $idLine, int $iIdUser) {


        $query = "UPDATE public.validation_ogra SET lock=:lock, iduser=:iduser WHERE id=:id";

        $entityManager = $this->getEntityManager();
        $statement = $entityManager->getConnection()->prepare($query);
        $statement->bindValue(':lock', 'TRUE');
        $statement->bindParam(':iduser',$iIdUser );
        $statement->bindParam(':id', $idLine);
        $statement->execute();
    }



}
