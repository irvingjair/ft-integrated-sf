<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Openspec."line"
 *
 * @ORM\Table(name="openspec.""Line""", indexes={@ORM\Index(name="Line.Spec", columns={"Spec"}), @ORM\Index(name="Line.EdLf", columns={"EdLf"}), @ORM\Index(name="Line.Ef", columns={"Ef"}), @ORM\Index(name="Line.E", columns={"E"}), @ORM\Index(name="Line.ELf", columns={"ELf"}), @ORM\Index(name="Line.EdL", columns={"EdL"}), @ORM\Index(name="Line.EL", columns={"EL"})})
 * @ORM\Entity
 */
class OpenspecLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="""ID""", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="openspec.""Line""_ID_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="""Lt""", type="bigint", nullable=false)
     */
    private $lt;

    /**
     * @var int
     *
     * @ORM\Column(name="""Lo""", type="bigint", nullable=false)
     */
    private $lo;

    /**
     * @var int
     *
     * @ORM\Column(name="""Spec""", type="bigint", nullable=false)
     */
    private $spec;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""Ef""", type="bigint", nullable=true)
     */
    private $ef;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""E""", type="bigint", nullable=true)
     */
    private $e;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""EdL""", type="bigint", nullable=true)
     */
    private $edl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""EdLo""", type="bigint", nullable=true)
     */
    private $edlo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""EdLf""", type="bigint", nullable=true)
     */
    private $edlf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""EL""", type="bigint", nullable=true)
     */
    private $el;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""ELo""", type="bigint", nullable=true)
     */
    private $elo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""ELf""", type="bigint", nullable=true)
     */
    private $elf;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Spec""", referencedColumnName="""ID""")
     * })
     */
    private $espec;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""ID""", referencedColumnName="""ID""")
     * })
     */
    private $eid;

    /**
     * @var \Openspec."field"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecField")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""ELf""", referencedColumnName="""ID""")
     * })
     */
    private $eelf;

    /**
     * @var \Openspec."line"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""EL""", referencedColumnName="""ID""")
     * })
     */
    private $eel;

    /**
     * @var \Openspec."field"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecField")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Ef""", referencedColumnName="""ID""")
     * })
     */
    private $eef;

    /**
     * @var \Openspec."field"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecField")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""EdLf""", referencedColumnName="""ID""")
     * })
     */
    private $eedlf;

    /**
     * @var \Openspec."line"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""EdL""", referencedColumnName="""ID""")
     * })
     */
    private $eedl;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""E""", referencedColumnName="""ID""")
     * })
     */
    private $ee;


}
