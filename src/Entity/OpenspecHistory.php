<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Openspec."history"
 *
 * @ORM\Table(name="openspec.""History""", indexes={@ORM\Index(name="History.Spec", columns={"Spec"}), @ORM\Index(name="History.UpdateType", columns={"UpdateType"}), @ORM\Index(name="History.UpdateUser", columns={"UpdateUser"})})
 * @ORM\Entity
 */
class OpenspecHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="""ID""", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="openspec.""History""_ID_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="""UpdateType""", type="bigint", nullable=false)
     */
    private $updatetype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="""UpdateDate""", type="datetime", nullable=false)
     */
    private $updatedate;

    /**
     * @var int
     *
     * @ORM\Column(name="""UpdateUser""", type="bigint", nullable=false)
     */
    private $updateuser;

    /**
     * @var int
     *
     * @ORM\Column(name="""Spec""", type="bigint", nullable=false)
     */
    private $spec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="""BeforeUpdate""", type="text", nullable=true)
     */
    private $beforeupdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="""AfterUpdate""", type="text", nullable=true)
     */
    private $afterupdate;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""UpdateUser""", referencedColumnName="""ID""")
     * })
     */
    private $eupdateuser;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""UpdateType""", referencedColumnName="""ID""")
     * })
     */
    private $eupdatetype;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Spec""", referencedColumnName="""ID""")
     * })
     */
    private $espec;


}
