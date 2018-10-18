<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Openspec."math"
 *
 * @ORM\Table(name="openspec.""Math""", indexes={@ORM\Index(name="Math.MathName", columns={"MathName"}), @ORM\Index(name="Math.MathUnit", columns={"MathUnit"})})
 * @ORM\Entity
 */
class OpenspecMath
{
    /**
     * @var int
     *
     * @ORM\Column(name="""ID""", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="openspec.""Math""_ID_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="""MathSymbol""", type="text", nullable=false)
     */
    private $mathsymbol;

    /**
     * @var int
     *
     * @ORM\Column(name="""MathName""", type="bigint", nullable=false)
     */
    private $mathname;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""MathUnit""", type="bigint", nullable=true)
     */
    private $mathunit;

    /**
     * @var string
     *
     * @ORM\Column(name="""MathFormula""", type="text", nullable=false)
     */
    private $mathformula;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""MathUnit""", referencedColumnName="""ID""")
     * })
     */
    private $emathunit;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""MathName""", referencedColumnName="""ID""")
     * })
     */
    private $emathname;


}
