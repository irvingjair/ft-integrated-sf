<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Openspec."field"
 *
 * @ORM\Table(name="openspec.""Field""", indexes={@ORM\Index(name="Field.Line", columns={"Line"}), @ORM\Index(name="Field.QtyType", columns={"QtyType"}), @ORM\Index(name="Field.Unit", columns={"Unit"}), @ORM\Index(name="Field.AmountType", columns={"AmountType"}), @ORM\Index(name="Field.Measure", columns={"Measure"}), @ORM\Index(name="Field.RW", columns={"RW"}), @ORM\Index(name="Field.Expand", columns={"Expand"}), @ORM\Index(name="Field.Format", columns={"Format"}), @ORM\Index(name="Field.FieldType", columns={"FieldType"}), @ORM\Index(name="Field.Filter", columns={"Filter"}), @ORM\Index(name="Field.Spec", columns={"Spec"})})
 * @ORM\Entity
 */
class OpenspecField
{
    /**
     * @var int
     *
     * @ORM\Column(name="""Line""", type="bigint", nullable=false)
     */
    private $line;

    /**
     * @var int
     *
     * @ORM\Column(name="""ID""", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="openspec.""Field""_ID_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="""FieldType""", type="bigint", nullable=false)
     */
    private $fieldtype;

    /**
     * @var int
     *
     * @ORM\Column(name="""Order""", type="bigint", nullable=false)
     */
    private $order;

    /**
     * @var int
     *
     * @ORM\Column(name="""RW""", type="bigint", nullable=false)
     */
    private $rw;

    /**
     * @var int
     *
     * @ORM\Column(name="""Expand""", type="bigint", nullable=false)
     */
    private $expand;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""Filter""", type="bigint", nullable=true)
     */
    private $filter;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""Format""", type="bigint", nullable=true)
     */
    private $format;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""Spec""", type="bigint", nullable=true)
     */
    private $spec;

    /**
     * @var float|null
     *
     * @ORM\Column(name="""Num""", type="float", precision=10, scale=0, nullable=true)
     */
    private $num;

    /**
     * @var string|null
     *
     * @ORM\Column(name="""Text""", type="text", nullable=true)
     */
    private $text;

    /**
     * @var int
     *
     * @ORM\Column(name="""AmountType""", type="bigint", nullable=false)
     */
    private $amounttype;

    /**
     * @var int
     *
     * @ORM\Column(name="""QtyType""", type="bigint", nullable=false)
     */
    private $qtytype;

    /**
     * @var float|null
     *
     * @ORM\Column(name="""Qty""", type="float", precision=10, scale=0, nullable=true)
     */
    private $qty;

    /**
     * @var float|null
     *
     * @ORM\Column(name="""Qty2""", type="float", precision=10, scale=0, nullable=true)
     */
    private $qty2;

    /**
     * @var int
     *
     * @ORM\Column(name="""Measure""", type="bigint", nullable=false)
     */
    private $measure;

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
     *   @ORM\JoinColumn(name="""RW""", referencedColumnName="""ID""")
     * })
     */
    private $erw;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""QtyType""", referencedColumnName="""ID""")
     * })
     */
    private $eqtytype;

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
     * @var \Openspec."line"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Line""", referencedColumnName="""ID""")
     * })
     */
    private $eline;

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
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Format""", referencedColumnName="""ID""")
     * })
     */
    private $eformat;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Filter""", referencedColumnName="""ID""")
     * })
     */
    private $efilter;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""FieldType""", referencedColumnName="""ID""")
     * })
     */
    private $efieldtype;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Expand""", referencedColumnName="""ID""")
     * })
     */
    private $eexpand;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""AmountType""", referencedColumnName="""ID""")
     * })
     */
    private $eamounttype;


}
