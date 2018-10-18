<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Openspec."tree"
 *
 * @ORM\Table(name="openspec.""Tree""", indexes={@ORM\Index(name="Tree.Child", columns={"Child"}), @ORM\Index(name="Tree.Parent", columns={"Parent"})})
 * @ORM\Entity (repositoryClass="App\Repository\TreeRepository")
 */
class OpenspecTree
{
    /**
     * @var int
     *
     * @ORM\Column(name="""Child""", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $child;

    /**
     * @var int
     *
     * @ORM\Column(name="""Order""", type="bigint", nullable=false)
     */
    private $order;

    /**
     * @var int
     *
     * @ORM\Column(name="""Parent""", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $parent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""P2""", type="bigint", nullable=true)
     */
    private $p2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""P3""", type="bigint", nullable=true)
     */
    private $p3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""P4""", type="bigint", nullable=true)
     */
    private $p4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="""P5""", type="bigint", nullable=true)
     */
    private $p5;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Parent""", referencedColumnName="""ID""")
     * })
     */
    private $eparent;

    /**
     * @var \Openspec."s"
     *
     * @ORM\ManyToOne(targetEntity="OpenspecS")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="""Child""", referencedColumnName="""ID""")
     * })
     */
    private $echild;

  /**
   * @return int
   */
  public function getChild(): int
  {
    return $this->child;
  }

  /**
   * @return int
   */
  public function getOrder(): int
  {
    return $this->order;
  }

  /**
   * @return int
   */
  public function getParent(): int
  {
    return $this->parent;
  }

  /**
   * @return int|null
   */
  public function getP2()
  {
    return $this->p2;
  }

  /**
   * @return int|null
   */
  public function getP3()
  {
    return $this->p3;
  }

  /**
   * @return int|null
   */
  public function getP4()
  {
    return $this->p4;
  }

  /**
   * @return int|null
   */
  public function getP5()
  {
    return $this->p5;
  }

  /**
   * @return OpenspecS
   */
  public function getEparent(): OpenspecS
  {
    return $this->eparent;
  }

  /**
   * @return OpenspecS
   */
  public function getEchild(): OpenspecS
  {
    return $this->echild;
  }

  /**
   * @param int $child
   */
  public function setChild(int $child)
  {
    $this->child = $child;
  }

  /**
   * @param OpenspecS $echild
   */
  public function setEchild(OpenspecS $echild)
  {
    $this->echild = $echild;
  }

  /**
   * @param OpenspecS $eparent
   */
  public function setEparent(OpenspecS $eparent)
  {
    $this->eparent = $eparent;
  }

  /**
   * @param int $order
   */
  public function setOrder(int $order)
  {
    $this->order = $order;
  }

  /**
   * @param int|null $p2
   */
  public function setP2($p2)
  {
    $this->p2 = $p2;
  }

  /**
   * @param int|null $p3
   */
  public function setP3($p3)
  {
    $this->p3 = $p3;
  }

  /**
   * @param int|null $p4
   */
  public function setP4($p4)
  {
    $this->p4 = $p4;
  }

  /**
   * @param int|null $p5
   */
  public function setP5($p5)
  {
    $this->p5 = $p5;
  }

  /**
   * @param int $parent
   */
  public function setParent(int $parent)
  {
    $this->parent = $parent;
  }
}
