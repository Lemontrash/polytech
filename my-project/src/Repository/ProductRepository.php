<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductRepository
{
    private EntityManagerInterface $em;

    /**
     * @return array
     */
    public function findAll(): array
    {
        $qb = $this->em->createQueryBuilder()
            ->select('p')
            ->from(Product::class, 'p')
            ->andWhere('p.deleted = false');

        return $qb->getQuery()->getResult();
    }

    /**
     * @param string $id
     * @return Product|null
     */
    public function findById(string $id): ?Product
    {
        $product = $this->em->find(Product::class, $id);

        if (!$product instanceof Product || $product->getDeleted()) {
            throw new NotFoundHttpException('Product not found');
        }

        return $product;
    }

    /**
     * @param Product $data
     * @return Product
     */
    public function create(Product $data): Product
    {
        $this->em->persist($data);
        $this->em->flush();

        return $data;
    }

    /**
     * @param Product $data
     * @return Product
     */
    public function update(Product $data): Product
    {
        $this->em->persist($data);
        $this->em->flush();

        return $data;
    }

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }
}