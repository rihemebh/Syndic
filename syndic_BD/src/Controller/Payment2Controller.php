<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Payment2Controller extends AbstractController
{
    /**
     * @Route("/payment2", name="payment2")
     */
    public function index()
    {
        return $this->render('houses/payment/payment2.html.twig', [
            'controller_name' => 'Payment2Controller',
        ]);
    }
}
