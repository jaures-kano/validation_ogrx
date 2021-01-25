<?php

namespace App\Entity;

use App\Repository\DepLockARepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DepLockARepository::class)
 */
class DepLockA
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $dep;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $lock;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="depLockAs")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDep(): ?string
    {
        return $this->dep;
    }

    public function setDep(string $dep): self
    {
        $this->dep = $dep;

        return $this;
    }

    public function getLock(): ?bool
    {
        return $this->lock;
    }

    public function setLock(?bool $lock): self
    {
        $this->lock = $lock;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
