<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpenSpec.S
 *
 * @ORM\Table(name="OpenSpec.""S""", uniqueConstraints={@ORM\UniqueConstraint(name="Name_UNIQUE", columns={"Name"})}, indexes={@ORM\Index(name="S.Version", columns={"Version"}), @ORM\Index(name="S.LastUpdateUser", columns={"LastUpdateUser"}), @ORM\Index(name="S.Owner", columns={"Owner"}), @ORM\Index(name="S.CreateUser", columns={"CreateUser"}), @ORM\Index(name="S.Type", columns={"Type"}), @ORM\Index(name="S.Share", columns={"Share"}), @ORM\Index(name="S.Status", columns={"Status"})})
 * @ORM\Entity
 */
class OpenspecS
{
    /**
     * @var int
     *
     * @ORM\Column(name="""ID""", type="integer", nullable=false)
     * @ORM\ID
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="openspec.""S_ID_seq""", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="""Type""", type="bigint", nullable=false)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="""Name""", type="text", nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="""Share""", type="bigint", nullable=false)
     */
    private $share;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""Owner""", type="bigint", nullable=true)
     */
    private $owner;

    /**
     * @var int
     *
     * @ORM\Column(name="""Status""", type="bigint", nullable=false)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""Version""", type="bigint", nullable=true)
     */
    private $version;

    /**
     * @var string|null
     *
     * @ORM\Column(name="""Icon""", type="text", nullable=true)
     */
    private $icon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="""Notes""", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var int
     *
     * @ORM\Column(name="""CreateUser""", type="bigint", nullable=false)
     */
    private $createuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="""CreateDate""", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdate = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="""LastUpdateUser""", type="bigint", nullable=false)
     */
    private $lastupdateuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="""LastUpdateDate""", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastupdatedate = 'CURRENT_TIMESTAMP';

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Version""", referencedColumnName="""ID""")
     * })
     */
    private $eversion;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Status""", referencedColumnName="""ID""")
     * })
     */
    private $estatus;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Share""", referencedColumnName="""ID""")
     * })
     */
    private $eshare;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Owner""", referencedColumnName="""ID""")
     * })
     */
    private $eowner;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""LastUpdateUser""", referencedColumnName="""ID""")
     * })
     */
    private $elastupdateuser;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""CreateUser""", referencedColumnName="""ID""")
     * })
     */
    private $ecreateuser;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Type""", referencedColumnName="""ID""")
     * })
     */
    private $etype;

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * @return int
   */
  public function getType(): int
  {
    return $this->type;
  }

  /**
   * @return null|string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @return int
   */
  public function getShare(): int
  {
    return $this->share;
  }

  /**
   * @return int|null
   */
  public function getOwner()
  {
    return $this->owner;
  }

  /**
   * @return int
   */
  public function getStatus(): int
  {
    return $this->status;
  }

  /**
   * @return int|null
   */
  public function getVersion()
  {
    return $this->version;
  }

  /**
   * @return null|string
   */
  public function getIcon()
  {
    return $this->icon;
  }

  /**
   * @return \DateTime
   */
  public function getCreatedate(): \DateTime
  {
    return $this->createdate;
  }

  /**
   * @return int
   */
  public function getCreateuser(): int
  {
    return $this->createuser;
  }

  /**
   * @return OpenspecS
   */
  public function getEcreateuser(): OpenspecS
  {
    return $this->ecreateuser;
  }

  /**
   * @return OpenspecS
   */
  public function getElastupdateuser(): OpenspecS
  {
    return $this->elastupdateuser;
  }

  /**
   * @return OpenspecS
   */
  public function getEowner(): OpenspecS
  {
    return $this->eowner;
  }

  /**
   * @return OpenspecS
   */
  public function getEshare(): OpenspecS
  {
    return $this->eshare;
  }

  /**
   * @return OpenspecS
   */
  public function getEstatus(): OpenspecS
  {
    return $this->estatus;
  }

  /**
   * @return OpenspecS
   */
  public function getEtype(): OpenspecS
  {
    return $this->etype;
  }

  /**
   * @return OpenspecS
   */
  public function getEversion(): OpenspecS
  {
    return $this->eversion;
  }

  /**
   * @return \DateTime
   */
  public function getLastupdatedate(): \DateTime
  {
    return $this->lastupdatedate;
  }

  /**
   * @return int
   */
  public function getLastupdateuser(): int
  {
    return $this->lastupdateuser;
  }

  /**
   * @return null|string
   */
  public function getNotes()
  {
    return $this->notes;
  }

  /**
   * @param \DateTime $createdate
   */
  public function setCreatedate(\DateTime $createdate)
  {
    $this->createdate = $createdate;
  }

  /**
   * @param int $createuser
   */
  public function setCreateuser(int $createuser)
  {
    $this->createuser = $createuser;
  }

  /**
   * @param OpenspecS $ecreateuser
   */
  public function setEcreateuser(OpenspecS $ecreateuser)
  {
    $this->ecreateuser = $ecreateuser;
  }

  /**
   * @param  $elastupdateuser
   */
  public function setElastupdateuser(OpenspecS $elastupdateuser)
  {
    $this->elastupdateuser = $elastupdateuser;
  }

  /**
   * @param OpenspecS $eowner
   */
  public function setEowner(OpenspecS $eowner)
  {
    $this->eowner = $eowner;
  }

  /**
   * @param OpenspecS $eshare
   */
  public function setEshare(OpenspecS $eshare)
  {
    $this->eshare = $eshare;
  }

  /**
   * @param OpenspecS $estatus
   */
  public function setEstatus(OpenspecS $estatus)
  {
    $this->estatus = $estatus;
  }

  /**
   * @param OpenspecS $etype
   */
  public function setEtype(OpenspecS $etype)
  {
    $this->etype = $etype;
  }

  /**
   * @param OpenspecS $eversion
   */
  public function setEversion(OpenspecS $eversion)
  {
    $this->eversion = $eversion;
  }

  /**
   * @param null|string $icon
   */
  public function setIcon($icon)
  {
    $this->icon = $icon;
  }

  /**
   * @param int $id
   */
  public function setId(int $id)
  {
    $this->id = $id;
  }

  /**
   * @param \DateTime $lastupdatedate
   */
  public function setLastupdatedate(\DateTime $lastupdatedate)
  {
    $this->lastupdatedate = $lastupdatedate;
  }

  /**
   * @param int $lastupdateuser
   */
  public function setLastupdateuser(int $lastupdateuser)
  {
    $this->lastupdateuser = $lastupdateuser;
  }

  /**
   * @param null|string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @param null|string $notes
   */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }

  /**
   * @param int|null $owner
   */
  public function setOwner($owner)
  {
    $this->owner = $owner;
  }

  /**
   * @param int $share
   */
  public function setShare(int $share)
  {
    $this->share = $share;
  }

  /**
   * @param int $status
   */
  public function setStatus(int $status)
  {
    $this->status = $status;
  }

  /**
   * @param int $type
   */
  public function setType(int $type)
  {
    $this->type = $type;
  }

  /**
   * @param int|null $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
}
