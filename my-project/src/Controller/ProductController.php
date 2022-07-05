<?php

namespace App\Controller;

use App\Form\Type\ProductType;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractApiController
{
    private ProductRepository $repo;

    /**
     * @Route("/api/v1/products", methods={"POST"})
     */
    public function add(Request $request): Response
    {
        $form = $this->buildForm(ProductType::class);

        $form->handleRequest($request);
    }

    public function __construct(ProductRepository $repo)
    {
        $this->repo = $repo;
    }
}