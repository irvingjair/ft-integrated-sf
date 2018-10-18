<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Openspec."queryprod"
 *
 * @ORM\Table(name="openspec.""QueryProd""", indexes={@ORM\Index(name="QP.Product", columns={"Product"}), @ORM\Index(name="IDX_3C59947543BE7B72", columns={"Query"})})
 * @ORM\Entity
 */
class OpenspecQueryprod
{
    /**
     * @var int
     *
     * @ORM\Column(name="Query", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $query;

    /**
     * @var int
     *
     * @ORM\Column(name="Product", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $product;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Query""", referencedColumnName="""ID""")
     * })
     */
    private $equery;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Product""", referencedColumnName="""ID""")
     * })
     */
    private $eproduct;

}
