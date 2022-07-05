<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="orders")
 */
class Order extends BaseEntity
{
    /**
     * @var string
     * @ORM\Column(name="id", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public string $id;

    /**
     * @var string
     * @ORM\OneToMany(targetEntity="OrderBag", mappedBy="order")
     */
    public $orderBag;

    /**
     * @var string
     * @ORM\Column(name="user_id", type="string", length=36, nullable=false)
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    public string $user;

    /**
     * @var string
     * @ORM\Column(name="status", type="string", length=100, nullable=false)
     */
    public string $status = 'pending';

    public function __construct()
    {
        $this->orderBag = new ArrayCollection();
    }
}