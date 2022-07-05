<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product extends BaseEntity
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
     * @ORM\Column(name="model", type="string", length=100, nullable=false, unique=true)
     */
    public string $model;

    /**
     * @var float
     * @ORM\Column(name="price", type="float", nullable=false)
     */
    public float $price;

    /**
     * @var int
     * @ORM\Column(name="left_in_stock", type="integer", nullable=false)
     */
    public int $leftInStock = 0;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return int
     */
    public function getLeftInStock(): int
    {
        return $this->leftInStock;
    }

    /**
     * @param int $leftInStock
     */
    public function setLeftInStock(int $leftInStock): void
    {
        $this->leftInStock = $leftInStock;
    }
}