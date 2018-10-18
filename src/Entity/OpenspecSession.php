<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Openspec."session"
 *
 * @ORM\Table(name="openspec.""Session""", indexes={@ORM\Index(name="SS.CurrentLanguage", columns={"CurrentLanguage"}), @ORM\Index(name="SS.CurrentSpec", columns={"CurrentSpec"}), @ORM\Index(name="SS.CurrentUser", columns={"CurrentUser"}), @ORM\Index(name="SS.CurrentVersion", columns={"CurrentVersion"}), @ORM\Index(name="SS.CurrentMode", columns={"CurrentMode"})})
 * @ORM\Entity
 */
class OpenspecSession
{
    /**
     * @var string
     *
     * @ORM\Column(name="""CurrentSession""", type="text", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="openspec.""Session""_CurrentSession_seq", allocationSize=1, initialValue=1)
     */
    private $currentsession;

    /**
     * @var int
     *
     * @ORM\Column(name="""CurrentUser""", type="bigint", nullable=false)
     */
    private $currentuser;

    /**
     * @var int
     *
     * @ORM\Column(name="""CurrentLanguage""", type="bigint", nullable=false)
     */
    private $currentlanguage;

    /**
     * @var int
     *
     * @ORM\Column(name="""CurrentMode""", type="bigint", nullable=false)
     */
    private $currentmode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""CurrentVersion""", type="bigint", nullable=true)
     */
    private $currentversion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""CurrentSpec""", type="bigint", nullable=true)
     */
    private $currentspec;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""CurrentVersion""", referencedColumnName="""ID""")
     * })
     */
    private $ecurrentversion;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""CurrentUser""", referencedColumnName="""ID""")
     * })
     */
    private $ecurrentuser;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""CurrentSpec""", referencedColumnName="""ID""")
     * })
     */
    private $ecurrentspec;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""CurrentMode""", referencedColumnName="""ID""")
     * })
     */
    private $ecurrentmode;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""CurrentLanguage""", referencedColumnName="""ID""")
     * })
     */
    private $ecurrentlanguage;


}
