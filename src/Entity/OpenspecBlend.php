<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Openspec."blend"
 *
 * @ORM\Table(name="openspec.""Blend""", indexes={@ORM\Index(name="Blend.Pd-U", columns={"Pd-U"}), @ORM\Index(name="Blend.C-U", columns={"C-U"}), @ORM\Index(name="Blend.C-SU", columns={"C-SU"}), @ORM\Index(name="Blend.Pd-SU", columns={"Pd-SU"}), @ORM\Index(name="Blend.I", columns={"I"}), @ORM\Index(name="Blend.Ln", columns={"Ln"}), @ORM\Index(name="Blend.Pd", columns={"Pd"}), @ORM\Index(name="Blend.StdSv", columns={"StdSv"}), @ORM\Index(name="Blend.Sv", columns={"Sv"})})
 * @ORM\Entity
 */
class OpenspecBlend
{
    /**
     * @var int
     *
     * @ORM\Column(name="""ID""", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="openspec.""Blend""_ID_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="""Pd""", type="bigint", nullable=false)
     */
    private $pd;

    /**
     * @var int
     *
     * @ORM\Column(name="""Pd-U""", type="bigint", nullable=false)
     */
    private $pdU;

    /**
     * @var int
     *
     * @ORM\Column(name="""Pd-SU""", type="bigint", nullable=false)
     */
    private $pdSu;

    /**
     * @var float
     *
     * @ORM\Column(name="""Pd-UF""", type="float", precision=10, scale=0, nullable=false)
     */
    private $pdUf;

    /**
     * @var int
     *
     * @ORM\Column(name="""I""", type="bigint", nullable=false)
     */
    private $i;

    /**
     * @var int
     *
     * @ORM\Column(name="""C-U""", type="bigint", nullable=false)
     */
    private $cU;

    /**
     * @var int
     *
     * @ORM\Column(name="""C-SU""", type="bigint", nullable=false)
     */
    private $cSu;

    /**
     * @var float
     *
     * @ORM\Column(name="""C-UF""", type="float", precision=10, scale=0, nullable=false)
     */
    private $cUf;

    /**
     * @var int
     *
     * @ORM\Column(name="""StdSv""", type="bigint", nullable=false)
     */
    private $stdsv;

    /**
     * @var int
     *
     * @ORM\Column(name="""Sv""", type="bigint", nullable=false)
     */
    private $sv;

    /**
     * @var int
     *
     * @ORM\Column(name="""Ln""", type="bigint", nullable=false)
     */
    private $ln;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Sv""", referencedColumnName="""ID""")
     * })
     */
    private $esv;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""StdSv""", referencedColumnName="""ID""")
     * })
     */
    private $estdsv;

    /**
     * @var \Openspec."unit"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Pd-U""", referencedColumnName="""ID""")
     * })
     */
    private $epdU;

    /**
     * @var \Openspec."unit"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Pd-SU""", referencedColumnName="""ID""")
     * })
     */
    private $epdSu;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Pd""", referencedColumnName="""ID""")
     * })
     */
    private $epd;

    /**
     * @var \Openspec."line"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Ln""", referencedColumnName="""ID""")
     * })
     */
    private $eln;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""I""", referencedColumnName="""ID""")
     * })
     */
    private $ei;

    /**
     * @var \Openspec."unit"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""C-U""", referencedColumnName="""ID""")
     * })
     */
    private $ecU;

    /**
     * @var \Openspec."unit"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""C-SU""", referencedColumnName="""ID""")
     * })
     */
    private $ecSu;


}
