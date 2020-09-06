<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class housesController extends AbstractController
{
    /**
     * @Route("/houses", name="houses")
     */
    public function index()
    {
        return $this->render('houses/houses.html.twig', [
            'controller_name' => 'housesController',
        ]);
}}