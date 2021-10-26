<?php
// src/Controller/ProductController.php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MessageGenerator;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends abstractController
{
   /**
     * @Route("/product/{id}", name="product_show")
     */
    public function show(int $id): Response
    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($id);

        if (!$product) {
            echo'No product found for id '.$id , exit;
        }

        return new Response('PRODUCT NAME: '. $product->getName() . "<br>" . "PRODUCT PRICE: " . $product->getPrice() . "$" );
    }
    /**
     * @Route("/products/new")
     */
    public function new(MessageGenerator $messageGenerator): Response
    {
        // thanks to the type-hint, the container will instantiate a
        // new MessageGenerator and pass it to you!
        // ...

        $message = $messageGenerator->getHappyMessage();
        $number = $messageGenerator->getRandomNumber();

        echo "$number $message"; exit;
        // ...
    }
}