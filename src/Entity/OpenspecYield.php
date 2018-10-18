<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Openspec."yield"
 *
 * @ORM\Table(name="openspec.""Yield""", indexes={@ORM\Index(name="Yield.Math", columns={"Math"}), @ORM\Index(name="Yield.Unit", columns={"Unit"})})
 * @ORM\Entity
 */
class OpenspecYield
{
    /**
     * @var int
     *
     * @ORM\Column(name="""Blend""", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="openspec.""Yield""_Blend_seq", allocationSize=1, initialValue=1)
     */
    private $blend;

    /**
     * @var int
     *
     * @ORM\Column(name="""Math""", type="bigint", nullable=false)
     */
    private $math;

    /**
     * @var float
     *
     * @ORM\Column(name="""Qty""", type="float", precision=10, scale=0, nullable=false)
     */
    private $qty;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""Unit""", type="bigint", nullable=true)
     */
    private $unit;

    /**
     * @var \Openspec."unit"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Unit""", referencedColumnName="""ID""")
     * })
     */
    private $eunit;

    /**
     * @var \Openspec."math"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecMath")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Math""", referencedColumnName="""ID""")
     * })
     */
    private $emath;

    /**
     * @var \Openspec."blend"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecBlend")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Blend""", referencedColumnName="""ID""")
     * })
     */
    private $eblend;


}
