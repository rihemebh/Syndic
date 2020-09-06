<?php


namespace App\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class histController extends AbstractController
{
    /**
     * @Route("/histPay", name="hist")
     */
    public function index()
    {
        return $this->render('houses/histpay.html.twig', [
            'controller_name' => 'histController',
        ]);
    }}