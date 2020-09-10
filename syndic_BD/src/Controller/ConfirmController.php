<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConfirmController extends AbstractController
{
    /**
     * @Route("/confirm", name="confirm")
     */
    public function index()
    {
        return $this->render('houses/payment/confirm.html.twig', [
            'controller_name' => 'ConfirmController',
        ]);
    }
}
