<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Openspec."ingredient"
 *
 * @ORM\Table(name="openspec.""Ingredient""", indexes={@ORM\Index(name="Ingredient.N", columns={"N"}), @ORM\Index(name="Ingredient.N-U", columns={"N-U"}), @ORM\Index(name="Ingredient.N-SU", columns={"N-SU"})})
 * @ORM\Entity
 */
class OpenspecIngredient
{
    /**
     * @var int
     *
     * @ORM\Column(name="""Ln""", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="openspec.""Ingredient""_Ln_seq", allocationSize=1, initialValue=1)
     */
    private $ln;

    /**
     * @var int
     *
     * @ORM\Column(name="""N""", type="bigint", nullable=false)
     */
    private $n;

    /**
     * @var int
     *
     * @ORM\Column(name="""N-U""", type="bigint", nullable=false)
     */
    private $nU;

    /**
     * @var int
     *
     * @ORM\Column(name="""N-SU""", type="bigint", nullable=false)
     */
    private $nSu;

    /**
     * @var float
     *
     * @ORM\Column(name="""N-UF""", type="float", precision=10, scale=0, nullable=false)
     */
    private $nUf;

    /**
     * @var \Openspec."unit"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""N-U""", referencedColumnName="""ID""")
     * })
     */
    private $enU;

    /**
     * @var \Openspec."unit"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""N-SU""", referencedColumnName="""ID""")
     * })
     */
    private $enSu;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""N""", referencedColumnName="""ID""")
     * })
     */
    private $en;

    /**
     * @var \Openspec."line"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Ln""", referencedColumnName="""ID""")
     * })
     */
    private $eln;


}
