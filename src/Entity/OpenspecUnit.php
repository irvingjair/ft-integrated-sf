<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Openspec."unit"
 *
 * @ORM\Table(name="openspec.""Unit""", indexes={@ORM\Index(name="Unit.StdUnit", columns={"StdUnit"}), @ORM\Index(name="Unit.Measure", columns={"Measure"})})
 * @ORM\Entity
 */
class OpenspecUnit
{
    /**
     * @var int
     *
     * @ORM\Column(name="""ID""", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="openspec.""Unit""_ID_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="""Measure""", type="bigint", nullable=false)
     */
    private $measure;

    /**
     * @var int
     *
     * @ORM\Column(name="""StdUnit""", type="bigint", nullable=false)
     */
    private $stdunit;

    /**
     * @var float
     *
     * @ORM\Column(name="""UnitFactor""", type="float", precision=10, scale=0, nullable=false)
     */
    private $unitfactor;

    /**
     * @var string
     *
     * @ORM\Column(name="""UnitFormula""", type="text", nullable=false)
     */
    private $unitformula;

    /**
     * @var \Openspec."unit"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""StdUnit""", referencedColumnName="""ID""")
     * })
     */
    private $estdunit;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Measure""", referencedColumnName="""ID""")
     * })
     */
    private $emeasure;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""ID""", referencedColumnName="""ID""")
     * })
     */
    private $eid;


}
