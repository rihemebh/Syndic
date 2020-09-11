<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TreasuryController extends AbstractController
{
    /**
     * @Route("/treasury", name="treasury")
     */
    public function index()
    {
        return $this->render('treasury/index.html.twig', [
            'controller_name' => 'TreasuryController',
        ]);
    }
    /**
     * @Route("/bank", name="bank")
     */
    public function index2()
    {
        return $this->render('treasury/bank.html.twig', [
            'controller_name' => 'TreasuryController',
        ]);
    }
    /**
     * @Route("/caisse", name="caisse")
     */
    public function index3()
    {
        return $this->render('treasury/caisse.html.twig', [
            'controller_name' => 'TreasuryController',
        ]);
    }
}
