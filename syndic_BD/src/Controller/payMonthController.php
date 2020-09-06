<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class payMonthController extends AbstractController
{
    /**
     * @Route("/month", name="month")
     */
    public function index()
    {
        return $this->render('houses/payMonth.html.twig', [
            'controller_name' => 'payMonthController',
        ]);
    }
}
