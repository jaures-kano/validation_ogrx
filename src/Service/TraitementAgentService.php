<?php


namespace App\Service;


use App\Entity\ValidationOgra;
use App\Repository\ValidationOgraRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Utils;
use Symfony\Component\HttpFoundation\Request;

class TraitementAgentService
{

    private $ograRepository;
    private $entityManager;


    public function __construct(ValidationOgraRepository $ograRepository, EntityManagerInterface $entityManager)
    {
        $this->ograRepository = $ograRepository;
        $this->entityManager = $entityManager;
    }

    public function getNextLine(int $idUser)
    {
        $lines = $this->ograRepository->getNextLine($idUser);

        if ($lines[0]['codens']) {

            $linesToProcess = $this->ograRepository->getLinesByCodens($lines[0]['codens']);
            $this->ograRepository->lockLignesByCodens($lines[0]['codens'], $idUser);

        } else {

            $linesToProcess[0] = $lines[0];
            $this->ograRepository->lockLignesById($lines[0]['id'], $idUser);
        }


        return $linesToProcess;
    }


    public function getChampRecherche(int $id, string $sSite, Request $request) {

        $session = $request->getSession();
        $choice = $session->get('choice');

        if ($choice == 'OGRA') {
            $ogr = $this->ograRepository->find($id);
        }


        switch ($sSite) {
            case 'map':
                $ogr->setRechGoogleMaps(true);
                break;
            case 'google':
                $ogr->setRechGoogle(true);
                break;
            case 'societe':
                $ogr->setRechSociete(true);
                break;
            case 'pj':
                $ogr->setRechPj(true);
                break;
            case 'orias':
                $ogr->setRechOrias(true);
                break;
        }

        $this->entityManager->persist($ogr);
        $this->entityManager->flush();

    }

    public function validAllComments($id, $codens, $comments)
    {

    }
}