<?php

namespace App\Service;

use App\Repository\DepLockARepository;
use App\Repository\DepRepository;

class DepService
{

    private $depLockARepository;
    private $depRepository;


    public function __construct(DepLockARepository $depLockARepository, DepRepository $depRepository)
    {
        $this->depLockARepository = $depLockARepository;
        $this->depRepository = $depRepository;
    }

    public function getDepToAttribute()
    {
        return $this->depRepository->getDepAToAttribute();
    }
}