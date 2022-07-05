<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="order_bags")
 */
class OrderBag extends BaseEntity
{
    /**
     * @var string
     * @ORM\Column(name="id", type="string", length=36, nullable=false, options={"fixed"=true})
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public string $id;

    /**
     * @var Order
     * @ORM\Column(name="order_id", type="string", length=36, nullable=false)
     * @ORM\ManyToOne(targetEntity="Order", inversedBy="orderBag")
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     */
    public Order $order;

    /**
     * @var Product
     * @ORM\Column(name="product_id", type="string", length=36, nullable=false)
     * @ORM\OneToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    public Product $product;

    /**
     * @var int
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    public int $quantity = 1;
}