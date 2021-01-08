<?php

namespace App\Entity;

use App\Repository\ReseauLockARepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReseauLockARepository::class)
 */
class ReseauLockA
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reseau;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $lock;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reseauLockAs")
     */
    private $iduser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReseau(): ?string
    {
        return $this->reseau;
    }

    public function setReseau(string $reseau): self
    {
        $this->reseau = $reseau;

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

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }
}
