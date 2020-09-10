<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PayAnnController extends AbstractController
{
    /**
     * @Route("/payann", name="pay_ann")
     */
    public function index()
    {
        return $this->render('houses/payment/payAnn.html.twig', [
            'controller_name' => 'PayAnnController',
        ]);
    }
}
