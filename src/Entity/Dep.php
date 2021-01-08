<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Dep
 *
 * @ORM\Table(name="dep", indexes={@ORM\Index(name="dep_cp", columns={"cp"})})
 * @ORM\Entity
 */
class Dep
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dep_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable=true)
     */
    private $cp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dep", type="string", length=50, nullable=true)
     */
    private $dep;

    /**
     * @var string|null
     *
     * @ORM\Column(name="region", type="string", length=50, nullable=true)
     */
    private $region;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_region", type="string", length=2, nullable=true)
     */
    private $codeRegion;


}
