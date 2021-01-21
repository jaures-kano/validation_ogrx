<?php

namespace App\Service;

use App\Repository\DepLockARepository;
use App\Repository\DepRepositoryA;

class DepServiceA
{

    private $depLockARepository;
    private $depRepository;


    public function __construct(DepLockARepository $depLockARepository, DepRepositoryA $depRepository)
    {
        $this->depLockARepository = $depLockARepository;
        $this->depRepository = $depRepository;
    }

    public function getDepToAttribute()
    {
        return $this->depRepository->getDepAToAttribute();
    }

    public function getProgressionDeps()
    {
        return $this->depRepository->getDepAAttributeProgression();
    }

    public function getReseauProgression()
    {
        return $this->depRepository->getReseauProgression();
    }

}